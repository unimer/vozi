<?php

require 'rides.html';
// Create connection
$connection = mysqli_connect("localhost", "root", "", "vozi");
// Check connection
if ($connection) {
    echo "Connection established! <br>";
} else {
die ("connection failed.Reason: ".mysqli_connect_error()); }

$startlocation=$_POST ["startlocation"];
$endlocation =$_POST ["endlocation"];
$datum =$_POST ["datum"];
$seats =$_POST ["seats"];


// $sql = "SELECT * FROM insertion";

$sql1 = "SELECT id, startlocation,endlocation,datum,seats FROM insertion WHERE startlocation='".$startlocation."' AND endlocation = '".$endlocation."' AND datum ='".$datum."' AND  seats ='".$seats."'";

// $results=mysqli_query($connection,$sql);
$results1=mysqli_query($connection,$sql1);

while ($all = mysqli_fetch_assoc($results)) {
    echo "<tr>";
    echo "<td>".$all['startlocation']." </td>";
    echo "<td>".$all['endlocation']." </td>";
    echo "<td>".$all['datum']." </td>";
    echo "<td>".$all['seats']." </td>";
    echo "</tr>";
}

while ($alll = mysqli_fetch_assoc($results1)) {
    echo "<tr>";
    echo "<td>".$alll['startlocation']." </td>";
    echo "<td>".$alll['endlocation']." </td>";
    echo "<td>".$alll['datum']." </td>";
    echo "<td>".$alll['seats']." </td>";
    echo "</tr>";
}
// $row=mysqli_fetch_array($results);
// echo $row;
// if (mysqli_num_rows($results)>0) {

//     while ($row) {
//         echo $row[1]." ".row[2]." ".$row[3]." ".$row[4]." ".$row[5];
//         echo "<br>";
//     }
// }


mysqli_close($connection);

?>