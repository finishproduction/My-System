	
  <?php
include 'linkdb.php';
$query="select Masa,Isnin,Selesa,Rabu,Khamis,Jumaat,Sabtu,Ahad from jadual";
$result=mysqli_query($db,$query);
?>
<table align="center">
<p align="center">Senarai Nama Pelajar</p>
		<td align="center" bgcolor="green">Masa</td>
		<td align="center" bgcolor="green">Isnin</td>
		<td align="center" bgcolor="green">Selasa</td>
		<td align="center" bgcolor="green">Rabu</td>
		<td align="center" bgcolor="green">Khamis</td>
		<td align="center" bgcolor="green">Jumaat</td>
		<td align="center" bgcolor="green">Sabtu</td>
		<td align="center" bgcolor="green">Ahad</td>
<?php
while($jadual=mysqli_fetch_array($result)){
	$Masa=$jadual["Masa"];

echo "<tr>";
echo "<td>".$jadual["Masa"]."</td>";
echo "<td>".$jadual["Isnin"]."</td>";
echo "<td>".$jadual["Selasa"]."</td>";
echo "<td>".$jadual["Rabu"]."</td>";
echo "<td>".$jadual["Khamis"]."</td>";
echo "<td>".$jadual["Jumaat"]."</td>";
echo "<td>".$jadual["Sabtu"]."</td>";
echo "<td>".$jadual["Ahad"]."</td>";


echo "</tr>";
}
echo "</table>";
?>