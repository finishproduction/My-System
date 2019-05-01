<?php
$error='';
include('linkdb.php');
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$level=$_POST['level'];


	$query=mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");
	if (mysqli_num_rows($query)==0) 
	{
	$error="email or password incorrect!";
	}
	else
	{
	$row=mysqli_fetch_assoc($query);
	$_SESSION['email']=$row['email'];
	$_SESSION['level']=$row['level'];

	if ($row['level']=="Admin" && $level=="1") 
	{
	header("Location: adminmenu.php");
	}
	else if ($row['level']=="User" && $level=="2") 
	{
	header("Location: usermenu.php");
	}
	else
	{
	$error="Login Failed";
	}
}
}
?>