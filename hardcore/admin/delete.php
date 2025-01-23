<?php
  include_once('index.php');

  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "mchardcore";

  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

  if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  } else {
    if (isset($_GET['del'])) {
      $id = $_GET['del'];
      $sql= "DELETE From panel where id='$id'";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }
  }
?>
