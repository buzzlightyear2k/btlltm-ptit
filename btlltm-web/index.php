<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BTLLTM GROUP 7</title>
  <link rel="stylesheet" href="./css/style.css">
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="images/1.jpg" />
</head>
<body>

  <?php
    include("./config/config.php");
  ?>
  
  <div class="leaderboard">
    <?php
      include("./pages/header.php");
      include("./pages/main/listPlayerByScore.php");
      include("./pages/main/listPlayerByAvgCom.php");
      include("./pages/main/listPlayerByAvgTime.php");
      include("./pages/main/changePassword.php");
    ?>
  </div>

  <!-- Ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/main.js"></script>

</body>
</html>