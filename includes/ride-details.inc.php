<?php
  require "dbh.inc.php";

  session_start();
  $_SESSION['last-been'] = "$_SERVER[REQUEST_URI]";
  //$idRides = "";

  if (isset($_GET['rideID'])) {
    $idRides=$_GET['rideID'];
    $sql = "SELECT * FROM rides WHERE idRides='".$idRides."'";
    $result = mysqli_query($conn, $sql);

    if ($ride = mysqli_fetch_assoc($result)) {

      echo "<div class=\"col-md-0 col-sm-0 col-xs-1\">";
        //<!-- space -->
      echo "</div>";

      echo "<div class=\"row\">";
        echo "<h1 class=text-info><strong>".$ride['startpoint']." - ".$ride['endpoint']."</strong></h1>";
      echo "</div>";

      echo "<div class=\"col-md-0 col-sm-0 col-xs-1\">";
        //<!-- space -->
      echo "</div>";

      echo "<div class=\"col-md-4 col-sm-2 col-xs-2\">";

        echo "<h3><strong class=\"text-warning\">Vrijeme polaska: </strong><strong class='text-muted'>".$ride['timeRides']."</strong></h3>";
        echo "<p></p>";
        echo "<h3><strong class=\"text-warning\">Datum: </strong><strong class='text-muted'>".$ride['dateRides']."</strong></h3>";
        echo "<p></p>";
        echo "<h3><strong class=\"text-warning\">Broj mjesta: </strong><strong class='text-muted'>".$ride['seats']."</strong></h3>";
        echo "<p></p>";
        echo "<h3><strong class=\"text-warning\">Cijena: </strong><strong class='text-muted'>".$ride['cost']." KM</strong></h3>";
        echo "<p></p>";
        echo "<h3><strong class=\"text-warning\">Vozi: </strong><strong class='text-muted'><a href='#' targer='blank'>".$ride['usernameRides']."</a></strong></h3>";
        echo "<p></p>";

      echo "</div>";

      echo "<div class=\"col-md-4 col-sm-4 col-xs-4\">";

        if (isset($_SESSION['userUid'])) {
          echo "<h3 class=\"text-warning\"><strong>Opis vožnje: </strong></h3>";
          echo "<p class='text-muted'>".$ride['description']."</p>";
          echo "<h3><strong class=\"text-warning\">Kontakt: </strong><strong class='text-muted'><a href='#' targer='blank'>".$ride['phoneRides']."</a></strong></h3>";
          echo "<p></p>";
          echo "<h3><strong class=\"text-warning\">Registarske oznake: </strong><strong class='text-muted'><a href='#' targer='blank'>".$ride['licence']."</a></strong></h3>";

        }
        else{
          echo "<div class='alert alert-info'>";
            echo "<a href='login.form.php'> Za pregled telefonskog broja i broja registarskih oznaka, morate se prijaviti! </a>";
          echo "</div>";
        }
      echo "</div>";
    }


  }
  else {
    echo "Something went wrong";
  }
