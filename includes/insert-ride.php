<?php
session_start();

if (isset($_POST['insert-ride'])) {
  require "dbh.inc.php";

  $startpoint = $_POST['startlocation'];
  $endpoint = $_POST['endlocation'];
  $dateRides = $_POST['datum'];
  $seats = $_POST['seats'];
  $timeRides =$_POST['timee'];
  $cost =$_POST['price'] ;
  $description = $_POST['description'];
  $licence = $_POST['licencePlates'];
  $usernameRides = $_SESSION['userUid'];
  $phone = $_SESSION['userPhone'];


  if (!isset($_POST['licencePlates'])) {
    $licence = "Nema podataka";
  }
  else{
    $licence = $_POST['licencePlates'];
  }


  //echo $usernameRides;
  //echo "<h1> something </h1>";
  //$sql = "INSERT INTO rides (startpoint, endpoint, dateRides, timeRides, seats) VALUES (?,?,?,?,?)";
  if (isset($_SESSION['userUid'])) {
    $sql = "INSERT INTO rides (`startpoint`,`endpoint`,`dateRides`,`seats`, `timeRides`, `cost`,`description`, `usernameRides`, `licence`, `phoneRides`  )  VALUES ('$startpoint', '$endpoint','$dateRides', '$seats','$timeRides', '$cost', '$description', '$usernameRides', '$licence', '$phone' )";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../rides.php", true, 301);
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt, "ssssssssss", $startpoint, $endpoint, $dateRides, $timeRides, $seats, $cost, $description, $usernameRides, $licence, $phone);
      mysqli_stmt_execute($stmt);
      header("Location: ../rides.php?sucess=suc", true, 301);
      exit();

    }


    mysqli_close($conn);

  }
  else{
    header("Location: ../not-logged.php");
  }


}
else{
  echo "Njoko";
}
