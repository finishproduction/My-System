<!DOCTYPE html>
<html>
<head>
	<title>REGISTER USER</title>
		    <link rel="stylesheet" href="style/styledaftar.css">

</head>
<body style="background-image: url('image/firewatch.jpg')" style="font-family:('FontAwesome')">
<center>
<?php
include('linkdb.php');
if (isset($_POST["submit"])) 
{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$password=$_POST["password"];

	$name=mysqli_real_escape_string($con, $name);
	$email=mysqli_real_escape_string($con, $email);
	$password=mysqli_real_escape_string($con, $password);
	$passowrd=$password;

	$sql="SELECT email FROM users WHERE email='$email'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if (mysqli_num_rows($result)==1)
	{
	echo "<script>alert('Sorry...This email was register');
	window.location='index.php'</script>";
	}
	else
	{
	$query=mysqli_query($con, "INSERT INTO users (name,email,password,level)
		VALUES ('$name','$email','$password','User')");
	if($query)
	{
	echo "<script>alert('Thank You,you are registerd');
	window.location='index.php'</script>";
	}
}
}
?>
<div class="box1">
<h3>Register New User</h3>
<p><h4>Insert your Email, Name and Password for RECORD</h4></p>

<form name="daftar_baru" method="POST">
<h3><label>EMAIL</label></h3>
<input type="email" name="email" placeholder="example@example.com" required/><br>

<h3><label>NAMA</label></h3>
<input type="text" name="name" placeholder="HURUF BESAR" required/><br>

<h3><label>PASSWORD</label></h3>
<input type="password" name="password" placeholder="MINIMUM 5 ANGKA DIGIT" required/>

<input type="submit" value="REGISTER" name="submit">
</form>

<b>Have register?</b><br><br></b><a href="index.php"><input type="button" name="button" value="Click Here"></a>
</center>
</div>
</body>
</html>