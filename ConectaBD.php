<?php
	header('Content-type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');
	// Conectar bd
	$con=mysqli_connect("db515467882.db.1and1.com","dbo515467882","Registro@123","db515467882");

	
    mysql_query("SET character_set_results=utf8", $con);
    mb_internal_encoding('UTF-8');
    mysql_query("set names 'utf8'",$con);

	// Check connection 
	if (mysqli_connect_errno()){
	  echo "Error, no se pudo conectar la base de datos: " . mysqli_connect_error();
	} 
?>