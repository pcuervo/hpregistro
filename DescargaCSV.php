<?php
	// Conectar con bd
	$con=mysqli_connect("db515467882.db.1and1.com","dbo515467882","Registro@123","db515467882");
	if (mysqli_connect_errno()){
	  echo "Error, no se pudo conectar la base de datos: " . mysqli_connect_error();
	} 
	mysql_set_charset('utf8',$conn); 

	$archivo = 'registrados_etimex.csv';
	header("Content-Type: text/csv;charset=UTF-8" );
	
	$handle = fopen($archivo, 'w');
	$encabezado = array('Nombre', 'Apellido paterno', 'Apellido materno', 'Correo e.', utf8_decode('Teléfono'), 'Celular', 'Fecha de nacimiento', 'Calle', 'Num. Ext.', 'Num. Int.', 'Colonia', 'Ciudad', utf8_decode('Delegación/Municipio'), 'Estado', 'C.P.', 'Empresa', 'Giro', 'Cargo', utf8_decode('¿Cómo te enteraste?'), utf8_decode('Área interés'), utf8_decode("recibir información"));
	fputcsv($handle, $encabezado, ',', '"');
	 
	$sql = mysqli_query($con, 'SELECT * FROM TB_Usuario U INNER JOIN TB_Direccion D ON D.F_IdUsuario = U.F_IdUsuario INNER JOIN TB_Laboral L ON L.F_IdUsuario = U.F_IdUsuario INNER JOIN TB_Registro R ON R.F_IdUsuario = U.F_IdUsuario');
	 
	while($results = mysqli_fetch_array($sql)) {
		$results[24] == '1' ? $masInfo = 'si' : $masInfo = 'no';
		$row = array(			
			utf8_decode($results[1]),
			utf8_decode($results[2]),
			utf8_decode($results[3]),
			utf8_decode($results[4]),
			utf8_decode($results[5]),
			utf8_decode($results[6]),
			utf8_decode($results[7]),
			utf8_decode($results[9]),
			utf8_decode($results[10]),
			utf8_decode($results[11]),
			utf8_decode($results[12]),
			utf8_decode($results[13]),
			utf8_decode($results[14]),
			utf8_decode($results[15]),
			utf8_decode($results[16]),
			utf8_decode($results[18]),
			utf8_decode($results[19]),
			utf8_decode($results[20]),
			utf8_decode($results[22]),
			utf8_decode($results[23]), 
			$masInfo
		);
		
		fputcsv($handle, $row, ',', '"');
	}
	 
	fclose($handle);
	
	header('Location: '.$archivo);

	// Desconectar bd
	mysqli_close($con);
?>