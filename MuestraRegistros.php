<?php
	// Conectar con bd
	$con=mysqli_connect("db515467882.db.1and1.com","dbo515467882","Registro@123","db515467882");
	if (mysqli_connect_errno()){
	  echo "Error, no se pudo conectar la base de datos: " . mysqli_connect_error();
	} 

	$registros=mysqli_query($con, "SELECT F_Nombre, F_Apellidos, F_Correo, F_ FROM TB_Usuario");

	echo "<table border='1' >
	<tr>
	<td align=center><b>Nombre</b></td>
	<td align=center><b>Apellidos</b></td>
	<td align=center><b>Correo</b></td></td>
	<td align=center><b>Telefono</b></td>
	<td align=center><b>Fecha de Nacimiento</b></td>
	<td align=center><b>Calle</b></td></td>
	<td align=center><b>Num. Ext.</b></td></td>
	<td align=center><b>Num. Int</b></td></td>
	<td align=center><b>Colonia</b></td></td>
	<td align=center><b>Ciudad</b></td></td>
	<td align=center><b>Estado</b></td></td>
	<td align=center><b>C.P.</b></td></td>";

	while($data = mysqli_fetch_array($registros))
	{   
		echo "<tr>";
		echo "<td align=center>$data[0]</td>";
		echo "<td align=center>$data[1]</td>";
		echo "<td align=center>$data[2]</td>";
		echo "<td align=center>$data[3]</td>";
		echo "<td align=center>$data[4]</td>";
		echo "<td align=center>$data[5]</td>";
		echo "<td align=center>$data[7]</td>";
		echo "<td align=center>$data[8]</td>";
		echo "<td align=center>$data[9]</td>";
		echo "<td align=center>$data[10]</td>";
		echo "<td align=center>$data[11]</td>";
		echo "<td align=center>$data[12]</td>";
		echo "<td align=center>$data[13]</td>";
		echo "</tr>";
	}
	echo "</table>";

	// Desconectar bd
	mysqli_close($con);
?>