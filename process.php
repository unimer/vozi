<?php


// Create connection
$conn = mysqli_connect("localhost", "root", "", "vozi");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "connected!";
}



$startlocation = $_POST['startlocation'];
$endlocation = $_POST['endlocation'];
$datum = $_POST['datum'];


// $sql = "SELECT startpoint, endpoint, dateRides, timeRides, seats, cost, description,usernameRides FROM rides WHERE startpoint ='".$startlocation."' AND endpoint ='".$endlocation."' AND dateRides ='".$datum."'";
$sql = "SELECT * FROM rides WHERE startpoint ='".$startlocation."' AND endpoint ='".$endlocation."' AND dateRides ='".$datum."'";


$results=mysqli_query($conn,$sql);

if (mysqli_num_rows($results)>0) {
    while ($row=mysqli_fetch_array($results)) {
        echo "<br> <br> Od : ".$row[1]." <br>  Do: ".$row[2]. " <br> Datum: ".$row[3]." <br> Vrijeme: ".$row[4]. "<br> Slobodnih mjesta: ".$row[5]. "<br> Cijena: " .$row[6]. "<br> Opis: " .$row[7]. "<br> Vozi: " .$row[8];
        echo "<br>";
    }
}


// while ($all = mysqli_fetch_assoc($results)) {
//     echo "<tr>";
//     echo "<tr>".$all['startpoint']." </tr>";
//     echo "<td>".$all['endpoint']." </td>";
//     echo "<td>".$all['dateRides']." </td>";

//     echo "</tr>";
// }


mysqli_close($conn);
?>
