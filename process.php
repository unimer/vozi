<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "vozi";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "vozi");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$startlocation = $_POST['startlocation'];
$endlocation = $_POST['endlocation'];
$datum = $_POST['datum'];
$seats = $_POST['seats'];

$sql = "INSERT INTO rides (`startlocation`,`endlocation`,`datum`,`seats`)
VALUES ('$startlocation', '$endlocation','$datum','$seats')";

if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/vozi/rides.html", true, 301);
    // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>
