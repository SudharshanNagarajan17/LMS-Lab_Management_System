<?php
include 'https.php';
$i=(int)$_GET['i'];

include "link.php";
$conn=openCon();

$a = "SELECT * FROM infrasw GROUP BY block,cno ORDER BY block,cno";

$result=mysqli_query($conn,$a);

$j=0;
while($j<=$i)
	{
		$row=mysqli_fetch_array($result); 
		$j++;
	}

$ln=$row['cno'];
$bn=$row['block'];

$x=(string)$_GET['x'];
$y=(string)$_GET['y'];
$z=(string)$_GET['z'];
$t=(string)$_GET['tab'];

$a = "INSERT INTO $t(block,cno,package,brand,license) VALUES ('$bn','$ln','$x','$y','$z')";

if(mysqli_query($conn,$a))
	echo "<script>alert('Record added successfully.');</script>";

?>