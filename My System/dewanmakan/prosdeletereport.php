<?php
include 'linkdb.php';
$NAMA=$_GET['NAMA'];
$query="delete from report where NAMA='$NAMA'";

if ($result=mysqli_query($con,$query)) {
	echo " - Data Berjaya Di Delete";
	header('location:adminviewreport.php');
}
else{
	echo " - Data Tidak Berjaya Di Delete";
}

?>