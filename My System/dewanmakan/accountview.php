<head>
	<title>ACCOUNT VIEW(Admin)</title>
</head>
<body style="background-image: url('image/firewatch.jpg')">

<?php
include 'linkdb.php';

$query="select name, email, password, level from users";
$result=mysqli_query($con,$query);
?>
<table width="1000" bgcolor="white" align="center" cellspacing="0" cellpadding="0" border="10">
<h1><p align="center">LAPORAN</p></h1>
<center>
<img src="image/KS.png" height="70px" width="90px">
<br><a href="logout.php"><input type="submit" name="submit" value="LOGOUT"></a>
<a href="adminmenu.php"><input type="submit" name="submit" value="MENU"></a>
<a href="adminview1.php"><input type="submit" name="submit" value="Jadual DM"></a>
</center>
<h1><p align="center">Account View</p></h1>
	<td align="center" bgcolor="red">NAMA</td>
	<td align="center" bgcolor="yellow">EMAIL</td>
	<td align="center" bgcolor="yellow">PASSWORD</td>
	<td align="center" bgcolor="yellow">LEVEL</td>


<?php
while($users=mysqli_fetch_array($result)){
	$name=$users["name"];

echo "<tr>";
echo "<td>".$users["name"]."</td>";
echo "<td>".$users["email"]."</td>";
echo "<td>".$users["password"]."</td>";
echo "<td>".$users["level"]."</td>";

echo "</tr>";
}
echo "</table>";
?>

<br>

<center>
	
</center>
</body>