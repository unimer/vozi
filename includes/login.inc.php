<?php

if (isset($_POST['login-submit'])) {
  require 'dbh.inc.php';
  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];

  if (empty($mailuid) || empty($password)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  else if (empty($mailuid)){
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  else if (empty($password)){
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  else{
    $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) { //preparing the statements and checking if statement have an error
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid); //pass parametar to db
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt); //result

      if ($row = mysqli_fetch_assoc($result)) { // associative array so we can use it in php
        $pwdchk = password_verify($password, $row['pwdUsers']);

        if($pwdchk == false){

          header("Location: ../index.php?error=wrong");
          exit();
        }
        elseif ($pwdchk == true) {

          session_start();

          $_SESSION['userId'] = $row['idUsers'];
          $_SESSION['userUid'] = $row['uidUsers'];
          header("Location: ../index.php");

          exit();
        }
        else {
          header("Location: ../index.php?error=wrong");
          exit();
        }
      }
      else{
        header("Location: ../index.php?error=nouser");
        exit();
      }

    }
  }


}
else {
  header("Location: ../index.php");
  exit();
}
