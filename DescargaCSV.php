<?php
	// Conectar con bd
	$con=mysqli_connect("db515467882.db.1and1.com","dbo515467882","Registro@123","db515467882");
	if (mysqli_connect_errno()){
	  echo "Error, no se pudo conectar la base de datos: " . mysqli_connect_error();
	} 
	mysql_set_charset('utf8',$conn); 

	$archivo = 'registrados_etimex.csv';
	 
	$handle = fopen($archivo, 'w');
	$encabezado = array('Nombre', 'Apellidos', 'Email');
	fputcsv($handle, $encabezado, ',', '"');
	 
	$sql = mysqli_query($con, 'SELECT * FROM TB_Usuario');
	 
	while($results = mysqli_fetch_array($sql)) {
		$row = array(			
			$results[1],
			$results[2],
			$results[3] 
		);
		fputcsv($handle, $row, ',', '"');
	}
	 
	fclose($handle);
	
	header('Location: '.$archivo);

	// Desconectar bd
	mysqli_close($con);
?>