<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>SESSION</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
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
	<center>
	  <form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Nazwa użytkownika</label><br>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Hasło</label><br>
			<input type="password" name="password">
		</div>
		<div class="input-group"><br>
			<button type="submit" class="btn" name="login_user">Zaloguj się</button>
		</div>
	  </form>
  </center>
</body>
</html>
