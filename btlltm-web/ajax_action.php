<?php
  include('./config/config.php');

  if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password  = $_POST['password'];
    $newPassword = $_POST['newPassword'];

    $sqlCheck = "SELECT * FROM users WHERE username ='".$username."' AND password ='".$password."' LIMIT 1";
    $checkUser = mysqli_query($mysqli, $sqlCheck);
    $count = mysqli_num_rows($checkUser);

    $sql_update = "UPDATE users SET password ='".$newPassword."' WHERE username ='".$username."'";
    $changePw = mysqli_query($mysqli, $sql_update);

    if ($count > 0) {
      if ($changePw) {
        echo 1;
      } else {
        echo 0;
      }
    } else {
      echo 0;
    }
  }
?>