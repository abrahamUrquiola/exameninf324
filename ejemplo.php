<html>
<body>
<?php
include "conexion.inc.php";
//echo "Ejemplo basico de BD<br/>";
/*
$sql ="insert into alumno(id, nombre, apellido) ";
$sql.="values (6,'moyo','silva')";
mysqli_query($conn, $sql);
*/
$sql = "call consulta_notas";
$resultado = mysqli_query($conn, $sql);
/*
$extraccion = mysqli_fetch_array($resultado);
print_r($resultado);
echo "<br/>";
print_r($extraccion);
*/
?>
<table border="1px">
	<tr>
		<td>chq</td>
		<td>lpz</td>
		<td>cba</td>
		<td>oru</td>
		<td>cba</td>
		<td>pti</td>
		<td>tja</td>
		<td>scz</td>
		<td>ben</td>
		<td>pdo</td>
	</tr>
<?php
while ($fila = mysqli_fetch_row($resultado))
{
	//print_r($fila);
	echo "<tr>";
	echo "<td>".$fila[0]."</td>";
	echo "<td>".$fila[1]."</td>";
	echo "<td>".$fila[2]."</td>";
	echo "<td>".$fila[3]."</td>";
	echo "<td>".$fila[4]."</td>";
	echo "<td>".$fila[5]."</td>";
	echo "<td>".$fila[6]."</td>";
	echo "<td>".$fila[7]."</td>";
	echo "<td>".$fila[8]."</td>";
	echo "<tr>";
}
?>
</table>
</body>
<html>