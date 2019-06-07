<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "vozi";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Create connection
$conn = mysqli_connect("localhost", "root", "", "vozi");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

}
mysqli_close($conn);
?>