<?php
$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];

if (!empty($username) || !empty($email) || !empty($message)) {
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "mchardcore";

  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

  if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  } else {
    $SELECT = "SELECT email From panel Where email = ? Limit 1";
    $INSERT = "INSERT Into panel (username, email, message) values(?, ?, ?)";

    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if ($rnum==0) {
      $stmt->close();

      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $username, $email, $message);
      $stmt->execute();

      echo "<script type=\"text/javascript\">window.location('../index.php');</script>";
      echo "<script type=\"text/javascript\">window.alert('Prawidlowo wyslano twoje zgłoszenie!');</script>";
    } else {
      echo "<script type=\"text/javascript\">window.location('../index.php');</script>";
      echo "<script type=\"text/javascript\">window.alert('Już wysłałeś 1 zgłoszenie z tym emailem!');</script>";
    }
    $stmt->close();
    $conn->close();
  }
} else {
  echo "<script type=\"text/javascript\">window.location('../index.php');</script>";
  echo "<script type=\"text/javascript\">window.alert('Wypełnij wszystkie pola w zgłoszeniu!!');</script>";
  die();
}
?>
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
