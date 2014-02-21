<?php
	// Conectar base de datos
	include("ConectaBD.php");
	ini_set('display_errors', 'On');
	
	// Usuario
	$nombre = $_POST['nombre'];
	$apeP = $_POST['apellido-paterno'];
	$apeM = $_POST['apellido-materno'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$fecNac = $_POST['anio']. "-" . $_POST['mes'] . "-" .$_POST['dia']; 
	$tel = $_POST['telefono'];
	$cel = $_POST['celular'];
	// Dirección
	$calle = $_POST['calle'];
	$num_ext = $_POST['numero-exterior'];
	$num_int = $_POST['numero-interior'];
	$colonia = $_POST['colonia'];
	$delMun = $_POST['del-mun'];
	$ciudad = $_POST['ciudad'];
	$estado = $_POST['estado'];
	$cp = $_POST['cp'];
	// Laboral
	$empresa = $_POST['empresa'];
	$giro = $_POST['giro'];
	$cargo = $_POST['cargo'];
	// Otros
	$enteraste = $_POST['enteraste'];
	$area = $_POST['area'];
	$masInfo = $_POST['mas-info'];
	
	
	$sqlUsuario = "INSERT INTO TB_Usuario(F_Nombre, F_ApePat, F_ApeMat, F_Correo, F_Telefono, F_Celular, F_FecNac) VALUES ('".$nombre."', '".$apeP."', '".$apeM."', '".$correo."', '".$tel."', '".$cel."', '".$fecNac."')";
	echo $sqlUsuario;
	echo "<br />";	
	if (!mysqli_query($con,$sqlUsuario)){
		die('Error: ' . mysqli_error($con));
	} 
	$sqlDireccion = "INSERT INTO TB_Direccion(F_Calle, F_NumExt, F_NumInt, F_Colonia, F_Ciudad, F_MunDel, F_Estado, F_CP) VALUES ('".$calle."', '".$num_ext."', '".$num_int."', '".$colonia."', '".$ciudad."', '".$delMun."', '".$estado."', '".$cp."')";
	echo $sqlDireccion;
	echo "<br />";	
	if (!mysqli_query($con,$sqlDireccion)){
		die('Error: ' . mysqli_error($con));
	}
	$sqlLaboral = "INSERT INTO TB_Laboral(F_Empresa, F_Giro, F_Cargo) VALUES ('".$empresa."', '".$giro."', '".$cargo."')";
	echo $sqlLaboral;
	echo "<br />";	
	if (!mysqli_query($con,$sqlLaboral)){
		die('Error: ' . mysqli_error($con));
	}
	
	if($enteraste == 'otro') $enteraste = $_POST['otro'];	
	if($masInfo != '1') $masInfo = 0;
	$sqlRegistro = "INSERT INTO TB_Registro(F_Medio, F_AreaInteres, F_MasInfo) VALUES ('".$enteraste."', '".$area."', '".$masInfo."')";
	echo $sqlRegistro;
	echo "<br />";	
	if (!mysqli_query($con,$sqlRegistro)){
		die('Error: ' . mysqli_error($con));
	}