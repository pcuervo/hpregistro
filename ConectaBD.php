<?php
/*
	// Conectar bd
	$host = "db515467882.db.1and1.com";
	$bd = "db515467882";
	$usuario = "dbo515467882";
	$pw = "Registro@123";
	$con=mysqli_connect($host,$bd,$usuario,$pw);

    //mysql_query("set names 'utf8'",$con);

	// Check connection 
	if (mysqli_connect_errno()){
	  echo "Ha ocurrido un error, no se pudo conectar la base de datos: " . mysqli_connect_error();
	}
	*/
?>

<?php
	header('Content-type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');
	// Conectar bd
	//$con=mysqli_connect("db501050538.db.1and1.com","dbo501050538","m1chomanson1","db501050538");
	$con=mysqli_connect("db515467882.db.1and1.com","dbo515467882","Registro@123","db515467882");

	
    mysql_query("SET character_set_results=utf8", $con);
    mb_internal_encoding('UTF-8');
    mysql_query("set names 'utf8'",$con);

	// Check connection 
	if (mysqli_connect_errno()){
	  echo "Error, no se pudo conectar la base de datos: " . mysqli_connect_error();
	} 
?>