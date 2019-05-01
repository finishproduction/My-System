<!DOCTYPE html>
<html>
<head>
	<title>REGISTER ADMIN</title>
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
	window.location='accountview.php'</script>";
	}
	else
	{
	$query=mysqli_query($con, "INSERT INTO users (name,email,password,level)
		VALUES ('$name','$email','$password','Admin')");
	if($query)
	{
	echo "<script>alert('Thank You,you are registerd');
	window.location='accountview.php'</script>";
	}
}
}
?>
<img src="image/KS.png" height="90px" width="130px">
<h3>Register New Admin</h3>
<br>
<a href="adminmenu.php"><input type="button" name="button" value="MENU"></a>
<a href="adminview1.php"><input type="button" name="button" value="Jadual DM"></a>
<br>
<p><h4>Insert your Email, Name and Password for RECORD</h4></p>

<form name="daftar_baru" method="POST">
<h3><label>EMAIL</label></h3>
<input type="email" name="email" placeholder="example@example.com" required/><br>

<h3><label>NAMA</label></h3>
<input type="text" name="name" placeholder="HURUF BESAR" required/><br>

<h3><label>PASSWORD</label></h3>
<input type="password" name="password" placeholder="MINIMUM 5 ANGKA DIGIT" required/><br>
<br>
<input type="submit" value="SIGN UP" name="submit"><br>
<?php ?>
</form>
<br>
<b>Have registor?</b><br></b><a href="index.php"><input type="button" name="button" value="Click Here"></a>
</center>
</body>
</html>