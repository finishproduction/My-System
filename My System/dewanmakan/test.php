<!DOCTYPE html>
<html>
<head>
	<title>LOG IN to DM</title>
</head>
<body>
<center>
<img src="image/KS.png" height="90px" width="130px">
<h2>LOGIN to SISTEM MAKLUMAT PELAJAR</h2>
<p><h3>Insert your EMAIL and PASSWORD</h3></p>
<?php
session_start();
	if ($_SESSION) {
	if ($_SESSION['level']=="Admin") 
	{
		header("Location: adminmenu.php");
	}
	if ($_SESSION['level']=="User") 
	{
		header("Location: usermenu.php");
	}
	}
	include('login.php');
?>
<form action="" method="post">
<label><h3>Email:</h3></label>
<input align="center" type="id" name="email" placeholder="Email here" required/>
<br>
<label><h3>Password:</h3></label>
<input align="center" type="password" name="password" placeholder="Password here" required/>
<br>
<label><h3>Pengguna:</h3></label>
	<select name="level" required/>
	<option value="2">User</option>
	<option value="1">Admin</option>
</select>
<br>
<br>
<button type="submit" name="submit">LOGIN</button>
<br/>
<br>
<h3><?php
echo $error;
?></h3>
</form>
<p><h3>Not register Yet?</h3></p>
<a href="daftar.php"><input type="submit" name="button" value="Register Here"></a>
</center>
</body>
</html>