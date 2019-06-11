<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "vozi";

#connection to database
$conn=mysqli_connect($hostname, $username, $password, $dbName);

#check if connection works

if($conn->connect_error){
  die("Database connection failed". $conn->connect_error);
}
