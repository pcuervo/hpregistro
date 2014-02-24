<?php
	// Conectar base de datos
	include("ConectaBD.php");
	mysql_set_charset('utf8',$conn); 
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
	if (!mysqli_query($con,$sqlUsuario)){
		die('Error: ' . mysqli_error($con));
	} 
	$sqlDireccion = "INSERT INTO TB_Direccion(F_Calle, F_NumExt, F_NumInt, F_Colonia, F_Ciudad, F_MunDel, F_Estado, F_CP) VALUES ('".$calle."', '".$num_ext."', '".$num_int."', '".$colonia."', '".$ciudad."', '".$delMun."', '".$estado."', '".$cp."')";
	if (!mysqli_query($con,$sqlDireccion)){
		die('Error: ' . mysqli_error($con));
	}
	$sqlLaboral = "INSERT INTO TB_Laboral(F_Empresa, F_Giro, F_Cargo) VALUES ('".$empresa."', '".$giro."', '".$cargo."')";
	if (!mysqli_query($con,$sqlLaboral)){
		die('Error: ' . mysqli_error($con));
	}
	
	if($enteraste == 'otro') $enteraste = $_POST['otro'];	
	if($masInfo != '1') $masInfo = 0;
	$sqlRegistro = "INSERT INTO TB_Registro(F_Medio, F_AreaInteres, F_MasInfo) VALUES ('".$enteraste."', '".$area."', '".$masInfo."')";
	if (!mysqli_query($con,$sqlRegistro)){
		die('Error: ' . mysqli_error($con));
	}
	
	// Regresa el ID del usuario
	$query="SELECT F_IdUsuario FROM TB_Usuario ORDER BY F_IdUsuario DESC LIMIT 1";
	$rUsuario=mysqli_query($con, $query );
	
	if($data = mysqli_fetch_array($rUsuario)) {
		$idUsuario = $data[0];
	}
	// destinatario
	$para  = $correo;
	// subject
	$titulo = '#'.$idUsuario.' Gracias '.$nombre.' por registrarte al evento Etimex';

// message
	$mensaje = '
	<html>
	<head>
	  	<title>Etimex</title>
	</head>
	<body>
		  <p>Folio: '.$idUsuario.'</p>
		  <p>Hola '.$nombre.',</p>
		  <p>Se han registrado correctamente tus datos para asistir al evento Brand Label Etimex el día 18 de marzo a las 8:30am en Cintermex de la ciudad de Monterrey.<p>
		  <p>Por favor presenta este correo como confirmación de asistencia el día del evento.</p>
		  <p>¡Te esperamos!</p>
		  <p>Atentamente,</p>
		  <p>El equipo de Etimex y HP Indigo</p>
		  <img src="http://brandlabeletimex.com/images/etimex-logo.jpg" />
	</body>
	</html>';

	// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$cabeceras .= 'From: Evento Etimex <info@etimex.com>' . "\r\n";
	
	// Mail it
	mail($para, $titulo, $mensaje, $cabeceras);
	
	header( 'Location: index.php?registro=1' ) ;
	
?>