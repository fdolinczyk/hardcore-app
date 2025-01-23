<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MCHardcore.pl - Panel Zgłoszenie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../documents/css/style.css">
    <link rel="stylesheet" href="../documents/css/text.css">
    <link rel="stylesheet" href="../documents/css/textarea.css">
    <style>
      body {
        background-color: #bebfc7;
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
  </head>
  <body>
  <center>
    <br><br>
    <div class="w3-container">

      <div class="font">
        <div class="block">
          <div class="leftcolored">
            <a class="get" style="text-decoration: none;" href="../index.php" alt="#ITEMSHOP">ITEMSHOP </a>
            <a class="get" style="text-decoration: none;" href="../id/panel.php" alt="#PANEL">PANEL </a>
            <a class="get" style="text-decoration: none;" href="../id/regulamin.php" alt="#REGULAMIN">REGULAMIN </a>
            <a class="get" style="text-decoration: none;" href="../id/kontakt.php" alt="#KONTAKT">KONTAKT</a>
          </div>
          <div class="right">
            <font color="bebfc7">najlepszy serwer</font> hardcore <font color="bebfc7">w Polsce</font>
          </div>
          <div class="rightmchcolored">
            <a class="get" style="text-decoration: none;" href="../index.php" alt="#">mchardcore.pl</a>
          </div>
        </div>
      </div>

    <div class="block2">
      <!-- IDSP -->
      <div class="block4">
        <div class="w3-container">
          <div class="idsp">
            <div class="font">
              PANEL - ZGŁOSZENIE
            </div>
          </div>
          <!-- Items -->
          <div class="w3-container">
            <form class="" action="../database/insert.php" method="POST">
              <textarea style="resize: none; border-radius: 5px;" maxlength="800" rows="10" cols="80" name="message" id="message" placeholder="Maksimum 800 znaków!"></textarea><br>
              <input style="1" type="text" name="username" id="username" placeholder="Nick z gry *">
              <input style="2" type="email" name="email" id="email" placeholder="Email *"><br><br>
              <button type="submit" value="submit"><font color="white" size="5px">Prześlij</font></button>
            </form>
          </div>
        </div>
      </div>

      <!-- Minecraft -->
        <div class="leftminecraft">
          <div class="font2">
            <div>Minecraft</div>
          </div>
        </div>
      <div class="lefthardcore">
        <div class="font2">
          <div>Hardcore</div>
        </div>
      </div>
      <div color="font">
        <div class="lefttext">
          <pre>
Aby zgłosić błąd/cheatera,
kliknij na obrazek,
przekieruje Cię na następną
stronę, gdzie będziesz mógł
opisać swój problem

<b>IP: mchardcore.pl</b>
          </pre>
        </div>
      </div>
    </div>
    <div class="block3">
      <div class="copyright">
        <font color="bebfc7">Coding by <a style="text-decoration: none;" class="whitecopyright" href="https://filipdolińczyk.pl">Filip Dolińczyk</a> for MCHardcore.pl</font>
      </div>
    </div>
  </div>
  </center>
  </body>
</html>
