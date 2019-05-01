<?php
include 'linkdb.php';

$NAMA=$_POST['NAMA'];
$EMAIL=$_POST['EMAIL'];
$TAHUN=$_POST['TAHUN'];
$REPORT=$_POST['REPORT'];

$query="insert into report (NAMA,EMAIL,TAHUN,REPORT) 
		values ('$NAMA','$EMAIL','$TAHUN','$REPORT')";

if (mysqli_query($con,$query)){
	echo " - Data berjaya direkod";
	header('location:reportviewuser.php');
}
else{
	echo " - Data tidak berjaya direkod";
}
?>