<head>
	<title>REPORT VIEW(USER)</title>
</head>
<body style="background-image: url('image/firewatch.jpg')">
		<link rel="stylesheet" href="style/reportviewuser.css">
<?php
include 'linkdb.php';

$query="select NAMA, EMAIL, TAHUN, REPORT from report";
$result=mysqli_query($con,$query);
?>
<table width="1000" bgcolor="white" align="center" cellspacing="0" cellpadding="0" border="10">
<h1><p align="center">LAPORAN</p></h1>
<center>
<img src="image/KS.png" height="70px" width="90px">
<br><a href="logout.php"><input type="submit" name="logout" value="LOGOUT"></a>
<a href="usermenu.php"><input type="submit" name="submit" value="MENU"></a>
<a href="userview1.php"><input type="submit" name="submit" value="Jadual DM"></a>
</center>
<h1><p align="center">Report View</p></h1>
	<td align="center" bgcolor="red">NAMA</td>
	<td align="center" bgcolor="yellow">EMAIL</td>
	<td align="center" bgcolor="yellow">TAHUN</td>
	<td align="center" bgcolor="yellow">REPORT</td>


<?php
while($report=mysqli_fetch_array($result)){
	$TAHUN=$report["TAHUN"];

echo "<tr>";
echo "<td>".$report["NAMA"]."</td>";
echo "<td>".$report["EMAIL"]."</td>";
echo "<td>".$report["TAHUN"]."</td>";
echo "<td>".$report["REPORT"]."</td>";

echo "</tr>";
}
echo "</table>";
?>

<br>

<center>
	
</center>
</body>