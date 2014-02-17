<?php
	// Conectar base de datos
	include("ConectaBD.php");
	
	// Usuario
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$fecNac = $_POST['dia'] . "/" . $_POST['mes'] . "/" . $_POST['anio']; 
	$tel = $_POST['telefono'];
	// Dirección
	$calle = $_POST['calle'];
	$num_ext = $_POST['num_ext'];
	$num_int = $_POST['num_int'];
	$colonia = $_POST['colonia'];
	$estado = $_POST['estado'];
	$cp = $_POST['cp'];
	// Laboral
	$empresa = $_POST['empresa'];
	$giro = $_POST['giro'];
	$cargo = $_POST['cargo'];
	// Otros
	$enteraste = $_POST['enteraste'];
	$area = $_POST['area'];
	$mas_info = $_POST['mas-info'];
	
	
	$sqlUsuario = "INSERT INTO Usuarios VALUES ('".$email."', '".$nombres."', '".$apeP."', '".$apeM."', '".$password."', '".$fecNac."', '".$genero."', '".$paisNac."', '".$nacionalidad."', '".$paisRes."', '".$ciudadRes."', '".$tel."', '".$cel."')";
	if (!mysqli_query($con,$sqlUsuario)){
		die('Error: ' . mysqli_error($con));
	}