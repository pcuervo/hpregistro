<?php
	$con=mysqli_connect("db515467882.db.1and1.com","dbo515467882","Registro@123","db515467882");
	if (mysqli_connect_errno()){
	  echo "Error, no se pudo conectar la base de datos: " . mysqli_connect_error();
	}

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
		
	$qUsuario=mysqli_query($con, "SELECT * FROM TB_Admin WHERE F_Usuario = '".$usuario."' AND F_Password = '".$password."'");
	
	if($rUsuario = mysqli_fetch_array($qUsuario)) {
		session_start();
		$_SESSION['usuario'] = $usuario;
		header('Location: consulta.php?id='. session_id()) ;	
	} else {
		header('Location: login.html');
		
	}

?>