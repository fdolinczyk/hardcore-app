<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Musisz sie najpierw zalogowac!";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <style>
  table {
    border-collapse: collapse;
    color: #2e2e2e;
    font-family: myFont1;
    font-size: 15px;
    text-align: left;
  }

  th {
    background-color: gray;
    color: white;
    border-radius: 20px;
	  border: 5px solid white;
    font-family: myFont1;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2
  }

  .mess {
    width: 50px;
  }
  </style>
  <script language="JavaScript">
    window.onload = function () {
        document.addEventListener("contextmenu", function (e) {
            e.preventDefault();
        }, false);
        document.addEventListener("keydown", function (e) {
            if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                disabledEvent(e);
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                disabledEvent(e);
            }
            if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                disabledEvent(e);
            }
            if (e.ctrlKey && e.keyCode == 85) {
                disabledEvent(e);
            }
            if (event.keyCode == 123) {
                disabledEvent(e);
            }
        }, false);
        function disabledEvent(e) {
            if (e.stopPropagation) {
                e.stopPropagation();
            } else if (window.event) {
                window.event.cancelBubble = true;
            }
            e.preventDefault();
            return false;
        }
    }
</script>
<body>
  <div class="content">
      </table>
  	    <?php  if (isset($_SESSION['username'])) : ?>
          <br>
          <p><button type="button" name="button"><a style="text-decoration: none;" href="index.php?logout='1'" style="color: red;">Wyloguj się!</a></button></p><br>
      	   <table>
            <th style="text-align: center; height: 2%; width: 12px;">Id</th>
            <th style="text-align: center; height: 15%; width: 12px;">Nick</th>
            <th style="text-align: center; height: 15%; width: 12px;">Email</th>
            <div class="mess">
              <th style="text-align: center;">Wiadomość</th>
            </div>
            <th style="text-align: center; height: 5%; width: 12px;">Info</th>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "mchardcore");

            if ($conn-> connect_error) {
              die("Connection failed: ". $conn-> connect_error);
            }

            $sql = "SELECT id, username, email, message from panel";
            $result = $conn-> query($sql);

            if ($result-> num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo "<tr><td style='text-align: center;'>". $row["id"] ."</td><td style='text-align: left;'>". $row["username"] ."</td><td>". $row["email"] ."</td><td>". $row["message"] ." </td><td>". "<p><a style='text-decoration: none;' href='delete.php?del=". $row["id"] ."'><span style='color: red; margin: auto;' class='glyphicon glyphicon-trash'></span></a></p>" ." </td></tr>";
              }
              echo "</table>";
            } else {
              echo "<center><h2>Brak danych w bazie!</h2></center>";
            }

            $conn-> close();
            ?>
        </table>
      <?php endif ?>
    </div>
  </body>
</html>
