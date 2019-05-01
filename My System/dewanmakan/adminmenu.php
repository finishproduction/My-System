<!DOCTYPE html>
<html>
<head>
	<title>SISTEM DM (Admin)</title>
		    <link rel="stylesheet" href="style/styleadminview.css">

</head>
<body style="background-image: url('image/firewatch.jpg')" style="font-family:('FontAwesome')">
<center>
<?php
session_start();
if(!$_SESSION['email'])
{
	header("Location: index.php");
}
include('cek_admin.php');
?>

<!-- SENARAI MENU ADMIN -->
<br>
<br>
<div class="container">
<span class="text1">SELAMAT DATANG KE</span>
<span class="text2">SISTEM DEWAN MAKAN ADMIN</span>
</div>
<div class="box">
<img src="image/KS.png" height="90px" width="130px">
<a class="c1" href="adminview1.php"><input type="submit" name="submit" value="JADUAL DM"></a>
<a class="c1" href="adminviewreport.php"><input type="submit" name="submit" value="View REPORT"></a>
<a class="c1" href="daftaradmin.php"><input type="submit" name="submit" value="Register New ADMIN"></a>
<a class="c1" href="accountview.php"><input type="submit" name="submit" value="View USERS Account"></a>
<a class="c5" href="logout.php"><input type="submit" name="submit" value="LOGOUT"></a>
</div>
</center>
</body>
</html>