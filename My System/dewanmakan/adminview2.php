<head>
	<title>JADUAL DM2(admin)</title>
</head>
<body style="background-image: url('image/firewatch.jpg')">
		<link rel="stylesheet" href="style/adminview2.css">
<?php
include 'linkdb.php';

$query="select Masa, ISNIN, SELASA, RABU, KHAMIS, JUMAAT, SABTU, AHAD from jadual2";
$result=mysqli_query($con,$query);
?>
<table width="1000" bgcolor="white" align="center" cellspacing="0" cellpadding="0" border="10">
<h1><p align="center">JADUAL DEWAN MAKAN</p></h1>
<center>
<img src="image/KS.png" height="70px" width="90px">
<br><a href="logout.php"><input type="submit" name="logout" value="LOGOUT"></a>
<a href="adminmenu.php"><input type="submit" name="submit" value="MENU"></a>
<a href="adminviewreport.php"><input type="submit" name="submit" value="View REPORT"></a>
</center>
<h3><p align="center">Minggu 2</p></h3>
	<td align="center" bgcolor="red">MASA</td>
	<td align="center" bgcolor="yellow">ISNIN</td>
	<td align="center" bgcolor="yellow">SELASA</td>
	<td align="center" bgcolor="yellow">RABU</td>
	<td align="center" bgcolor="yellow">KHAMIS</td>
	<td align="center" bgcolor="yellow">JUMAAT</td>
	<td align="center" bgcolor="yellow">SABTU</td>
	<td align="center" bgcolor="yellow">AHAD</td>
	<td align="center" bgcolor="blue">Kemaskini</td>

<?php
while($jadual2=mysqli_fetch_array($result)){
	$Masa=$jadual2["Masa"];

echo "<tr>";
echo "<td>".$jadual2["Masa"]."</td>";
echo "<td>".$jadual2["ISNIN"]."</td>";
echo "<td>".$jadual2["SELASA"]."</td>";
echo "<td>".$jadual2["RABU"]."</td>";
echo "<td>".$jadual2["KHAMIS"]."</td>";
echo "<td>".$jadual2["JUMAAT"]."</td>";
echo "<td>".$jadual2["SABTU"]."</td>";
echo "<td>".$jadual2["AHAD"]."</td>";
echo "<td>","<a href=\"fromkemaskini2.php?Masa=$Masa\">Update<a/>";

echo "</tr>";
}
echo "</table>";
?>

<br>

<center>
	<a href="adminview1.php"><input type="submit" name="submit" value="Minggu 1"></a>
	<a href="adminview2.php"><input type="submit" name="submit" value="MINGGU 2"></a>
	<a href="adminview3.php"><input type="submit" name="submit" value="Minggu 3"></a>
	<a href="adminview4.php"><input type="submit" name="submit" value="Minggu 4"></a>
</center>
</body>