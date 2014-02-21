<?php
	// Conectar con bd
	$con=mysqli_connect("db515467882.db.1and1.com","dbo515467882","Registro@123","db515467882");
	if (mysqli_connect_errno()){
	  echo "Error, no se pudo conectar la base de datos: " . mysqli_connect_error();
	}
	$query="SELECT F_Nombre, F_ApePat, F_ApeMat, F_Empresa, F_Telefono, F_Celular, F_Correo FROM TB_Usuario U INNER JOIN TB_Laboral L ON U.F_IdUsuario = L.F_IdUsuario";
	$registros=mysqli_query($con, $query );

	echo "<table border='1' >
	<tr>
	<th class='span c-2' align=center><b>Nombre</b></th>
	<th class='span c-2' align=center><b>Apellido Paterno</b></th>
	<th class='span c-2' align=center><b>Empresa</b></th>
	<th class='span c-2' align=center><b>Tel.</b></th>
	<th class='span c-2' align=center><b>Cel.</b></th>
	<th class='span c-2' align=center><b>Correo</b></th></th>";

	while($data = mysqli_fetch_array($registros))
	{
		echo "<tr>";
		echo "<td align=center>$data[0]</td>";
		echo "<td align=center>$data[1]</td>";
		echo "<td align=center>$data[2]</td>";
		echo "<td align=center>$data[3]</td>";
		echo "<td align=center>$data[4]</td>";
		echo "<td align=center>$data[5]</td>";
		echo "<td align=center>$data[6]</td>";
		echo "</tr>";
	}
	echo "</table>";

	// Desconectar bd
	mysqli_close($con);
?>