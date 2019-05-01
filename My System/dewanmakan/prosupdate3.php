<?php
include 'linkdb.php';
$Masa=$_POST['Masa'];
$ISNIN=$_POST['ISNIN'];
$SELASA=$_POST['SELASA'];
$RABU=$_POST['RABU'];
$KHAMIS=$_POST['KHAMIS'];
$JUMAAT=$_POST['JUMAAT'];
$SABTU=$_POST['SABTU'];
$AHAD=$_POST['AHAD'];

$query="update jadual3 set Masa='$Masa',ISNIN='$ISNIN',SELASA='$SELASA',RABU='$RABU',KHAMIS='$KHAMIS',JUMAAT='$JUMAAT',SABTU='$SABTU',AHAD='$AHAD' where Masa='$Masa'";

if ($result=mysqli_query($con,$query)) {
	echo " - Data Berjaya Di Update";
	header('location:adminview3.php');
}
else{
	echo "- Data Tidak Berjaya Di Update";
}

?>