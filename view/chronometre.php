<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/chronometre.css" />
    <script type='text/javascript' src='../public/js/chronometre.js'></script>
    <script src="https://use.fontawesome.com/3903c9d7fd.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" rel="stylesheet">
    <title>Chronomètre</title>
  </head>
  <body>
  <ul class="menu">
            <li class="menu_list">
                <span class="front fas fa-home"></span>
                <a href="../index.php" class="side">home</a>
            </li>
            <li class="menu_list">
                <span class="front fas fa-briefcase"></span>
                <a href="chronometre.php" class="side">CHRONO</a>
            </li>
            <li class="menu_list">
                <span class="front fas fa-briefcase"></span>
                <a href="reveil.php" class="side">REVEIL</a>
            </li>
            <li class="menu_list">
                <span class="front fas fa-briefcase"></span>
                <a href="horloge.php" class="side">HORLOGE</a>
            </li>
            <li class="menu_list">
                <span class="front fas fa-briefcase"></span>
                <a href="minuteur.php" class="side">TIMER</a>
            </li>
        </ul>

  <div class="chrono">
    <h1>Chronomètre</h1>
    <div id="time"></div>
      <form name="parametre" action="" method="">
          <input type="button" name="lance"  value="Démarrer" onclick="chrono();debut();">
          <input type="button" name="pause"  value="Stop" onclick="arret();" disabled="disabled">
          <input type="button" name="zero"  value="Effacer" onclick="arret();raz();" disabled="disabled">
          <input type="button" name="rappel"  value="Rappel" onclick="rappeler();" disabled="disabled">
      </form>
      <div id="presenter">
        <p>Temps intermediaire : </p>
        <span id="interm"></span>
      </div>
    </div>
  </body>
</html>