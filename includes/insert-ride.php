<?php

if (isset($_POST['insert-ride'])) {
  require "dbh.inc.php";

  $startpoint = $_POST['startlocation'];
  $endpoint = $_POST['endlocation'];
  $dateRides = $_POST['datum'];
  $seats = $_POST['seats'];
  $timeRides = "10:45";
  $cost = "5";
  $car = "VW";

  //$sql = "INSERT INTO rides (startpoint, endpoint, dateRides, timeRides, seats) VALUES (?,?,?,?,?)";

  $sql = "INSERT INTO rides (`startpoint`,`endpoint`,`dateRides`, `timeRides`,`seats`, `cost`,`car` )  VALUES ('$startpoint', '$endpoint','$dateRides', '$timeRides','$seats', '$cost', '$car')";

  $stmt = mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: ../rides.php", true, 301);
    exit();
  }
  else{
    mysqli_stmt_bind_param($stmt, "sssssss", $startpoint, $endpoint, $dateRides, $timeRides, $seats, $cost, $car);
    mysqli_stmt_execute($stmt);
    header("Location: ../rides.php?sucess=suc", true, 301);
    exit();

  }


  mysqli_close($conn);




}
else{
  echo "Njoko";
}
