<?php 



$conn = mysqli_connect("localhost", "root", "", "vozi");


$startlocation=$_POST ["startlocation"];
$endlocation =$_POST ["endlocation"];
$datum =$_POST ["datum"];
$seats =$_POST ["seats"];

$sql1 = "SELECT id, startlocation,endlocation,datum,seats FROM insertion WHERE startlocation='".$startlocation."' AND endlocation = '".$endlocation."' AND datum ='".$datum."' AND  seats ='".$seats."'";

$result=mysqli_query($conn,$sql1);

$data = array();
while ($row = mysqli_fetch_assoc($result))
{
	$data[] = $row;
}

echo json_encode($data);

?>