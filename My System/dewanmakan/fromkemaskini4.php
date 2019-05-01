<?php

include 'linkdb.php';
$Masa=$_GET['Masa'];

$jadual4=mysqli_query($con,"select * from jadual4 where Masa='$Masa'");
$row=mysqli_fetch_array($dewanmakan);
?>

<form method="POST" action="prosupdate4.php">
<h3 align="center">UPDATE Minggu 4</h3>
<table width="400" align="center" cellspacing="0" cellpadding="0" border="1" bgcolor="white">
	<tr>
	<td height="40">Masa</td>
	<td>:<input type="text" name="Masa" value="<?php
	echo $row['Masa'];?>"></td>
	</tr>

	<tr>
	<td height="40">ISNIN</td>
	<td>:<input type="text" name="ISNIN" value="<?php
	echo $row['ISNIN'];?>"></td>
	</tr>

	<tr>
	<td height="40">SELASA</td>
	<td>:<input type="text" name="SELASA" value="<?php
	echo $row['SELASA'];?>"></td>
	</tr>

	<tr>
	<td height="40">RABU</td>
	<td>:<input type="text" name="RABU" value="<?php
	echo $row['RABU'];?>"></td>
	</tr>

	<tr>
	<td height="40">KHAMIS</td>
	<td>:<input type="text" name="KHAMIS" value="<?php
	echo $row['KHAMIS'];?>"></td>
	</tr>

	<tr>
	<td height="40">JUMAAT</td>
	<td>:<input type="text" name="JUMAAT" value="<?php
	echo $row['JUMAAT'];?>"></td>
	</tr>

	<tr>
	<td height="40">SABTU</td>
	<td>:<input type="text" name="SABTU" value="<?php
	echo $row['SABTU'];?>"></td>
	</tr>

	<tr>
	<td height="40">AHAD</td>
	<td>:<input type="text" name="AHAD" value="<?php
	echo $row['AHAD'];?>"></td>
	</tr>
	
</table>
<center>
	<br><input type="submit" name="submit" value="UPDATE">
</center>
</form>