<head>
	<title>JADUAL DM3(user)</title>
</head>
<body style="background-image: url('image/firewatch.jpg')">
		<link rel="stylesheet" href="style/userview3.css">
<?php
include 'linkdb.php';

$query="select Masa, ISNIN, SELASA, RABU, KHAMIS, JUMAAT, SABTU, AHAD from jadual3";
$result=mysqli_query($con,$query);
?>
<table width="1000" bgcolor="white" align="center" cellspacing="0" cellpadding="0" border="10">
<h1><p align="center">JADUAL DEWAN MAKAN</p></h1>
<center>
<img src="image/KS.png" height="70px" width="90px">
<br><a href="logout.php"><input type="submit" name="logout" value="LOGOUT"></a>
<a href="index.php"><input type="submit" name="submit" value="MENU"></a>
<a href="report.php"><input type="submit" name="submit" value="REPORT"></a>
</center>
<h3><p align="center">Minggu 3</p></h3>
	<td align="center" bgcolor="red">MASA</td>
	<td align="center" bgcolor="yellow">ISNIN</td>
	<td align="center" bgcolor="yellow">SELASA</td>
	<td align="center" bgcolor="yellow">RABU</td>
	<td align="center" bgcolor="yellow">KHAMIS</td>
	<td align="center" bgcolor="yellow">JUMAAT</td>
	<td align="center" bgcolor="yellow">SABTU</td>
	<td align="center" bgcolor="yellow">AHAD</td>

<?php
while($jadual3=mysqli_fetch_array($result)){
	$Masa=$jadual3["Masa"];

echo "<tr>";
echo "<td>".$jadual3["Masa"]."</td>";
echo "<td>".$jadual3["ISNIN"]."</td>";
echo "<td>".$jadual3["SELASA"]."</td>";
echo "<td>".$jadual3["RABU"]."</td>";
echo "<td>".$jadual3["KHAMIS"]."</td>";
echo "<td>".$jadual3["JUMAAT"]."</td>";
echo "<td>".$jadual3["SABTU"]."</td>";
echo "<td>".$jadual3["AHAD"]."</td>";

echo "</tr>";
}
echo "</table>";
?>

<br>

<center>
	<a href="userview1.php"><input type="submit" name="submit" value="Minggu 1"></a>
	<a href="userview2.php"><input type="submit" name="submit" value="Minggu 2"></a>
	<a href="userview3.php"><input type="submit" name="submit" value="MINGGU 3"></a>
	<a href="userview4.php"><input type="submit" name="submit" value="Minggu 4"></a>
	<br/>
	<br><a href="javascript:window.print()"><input type="print" name="submit" value="PRINT Table"></a>
</center>
</body>