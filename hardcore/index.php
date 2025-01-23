<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MCHardcore.pl - Itemshop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="documents/css/style.css">
    <link rel="stylesheet" href="documents/css/text.css">
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
              ITEMSHOP
            </div>
          </div>
          <!-- Items -->

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
Jesteś graczem pragnącym
przygód? Chcesz mierzyć
się z innymi graczami?
Nasz serwer <b>hardcore</b> Ci
to zapewni!
Wejdź już teraz i zacznij
walczyć o życie!

<b>IP: mchardcore.pl</b>
          </pre>
        </div>
      </div>
    </div>
    <div class="block3">
      <div class="copyright">
        <font color="bebfc7">Coding by <a style="text-decoration: none;" class="whitecopyright" href="https://filipdolinczyk.pl/">Filip Dolińczyk</a> for MCHardcore.pl</font>
      </div>
    </div>
  </div>
  </center>
  </body>
</html>
