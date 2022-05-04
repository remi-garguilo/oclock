<!DOCTYPE html>
<html lang="en">
<<head>
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
  <style>
        #clock {
            font-size: 175px;
            width: 700px;
            text-align: center;
            border: 2px solid black;
            border-radius: 20px;
        }
        .mid {
            font-size: 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
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
        <div class="mid">
            <div id="clock">8:10:45</div>
        </div>

    <script>
        setInterval(showTime, 1000);
        function showTime() {
            let time = new Date();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();
            am_pm = "AM";
  
            if (hour > 12) {
                hour -= 12;
                am_pm = "PM";
            }
            if (hour == 0) {
                hr = 12;
                am_pm = "AM";
            }
  
            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;
  
            let currentTime = hour + ":" 
                + min + ":" + sec + am_pm;
  
            document.getElementById("clock")
                .innerHTML = currentTime;
        }
  
        showTime();
    </script>
</body>
  
</html>