<!doctype html>
	<head>
		<meta charset="utf-8">
		<title>Etimex</title>
		<link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" href="images/favicon.ico">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">

			<header>

				<div class="width clearfix">

					<h1 class="columna c-10" >Registro Brand Label Etimex</h1>
					<img class="span c-2" src="images/etimex-logo.jpg" alt="">


				</div><!-- width clearfix -->

			</header>

			<div class="main">

				<div class="width clearfix instrucciones">

					<div class="subtitulo columna c-7 small-12">
						<h3>Bienvenido a una experiencia de primera clase</h3>
						<h4>Por favor registra tus datos</h4>
					</div>

					<div class="columna c-3 small-12">
						<a href="pdf/Agenda_Brand_Label_Etimex.pdf" class="boton columna c-12" target="_blank">Descargar agenda</a>
					</div>

				</div><!-- width clearfix -->

				<div class="width clearfix">

					<form action="RegistraInfo.php" class="columna c-10 small-12" accept-charset="utf-8" method="post">

						<div class="renglon clearfix">

							<div class="span c-6">
								<input class="span c-12 primer_campo" name="nombre"type="text" data-validation="required">
								<label class="span c-12" for="nombre">Nombre</label>
							</div><!-- span c-6 -->
							<div class="span c-3">
								<input class="span c-12" name="apellido-paterno"type="text" data-validation="required">
								<label class="span c-12" for="apellido-paterno">Apellido paterno</label>
							</div><!-- span c-3 -->
							<div class="span c-3">
								<input class="span c-12" name="apellido-materno"type="text">
								<label class="span c-12" for="apellido-materno">Apellido materno</label>
							</div><!-- span c-3 -->

						</div><!-- renglon -->

						<div class="renglon clearfix">

							<div class="span c-3">
								<input class="span c-12" name="correo" type="email" data-validation="email">
								<label class="span c-12" for="correo">Correo electrónico</label>
							</div><!-- span c-3 -->
							<div class="span c-3">
								<input class="span c-12" name="telefono" type="tel" data-validation="required">
								<label class="span c-12" for="telefono">Teléfono</label>
							</div><!-- span c-3 -->
							<div class="span c-3">
								<input class="span c-12" name="celular" type="tel">
								<label class="span c-12" for="celular">Celular</label>
							</div><!-- span c-3 -->
							<div class="span c-3">
								<input class="span c-4" name="dia"type="text" value="dd" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" data-validation="number">
								<input class="span c-4" name="mes"type="text" value="mm" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" data-validation="number" >
								<input class="span c-4" name="anio"type="text" value="aaaa" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" data-validation="number">
								<label class="span c-12" for="nacimiento">Fecha de nacimiento</label>
							</div><!-- span c-3 -->

						</div><!-- renglon -->

						<div class="renglon clearfix">

							<div class="span c-6">
								<input class="span c-12" name="empresa"type="text" data-validation="required">
								<label class="span c-12" for="empresa">Empresa</label>
							</div><!-- span c-6 -->
							<div class="span c-3">
								<input class="span c-12" name="giro"type="text" data-validation="required">
								<label class="span c-12" for="giro">Giro</label>
							</div><!-- span c-3 -->
							<div class="span c-3">
								<input class="span c-12" name="cargo"type="text" data-validation="required">
								<label class="span c-12" for="cargo">Cargo</label>
							</div><!-- span c-3 -->

						</div><!-- renglon -->

						<div class="renglon clearfix">

							<div class="span c-3">
								<input class="span c-12" name="calle"type="text" data-validation="required">
								<label class="span c-12" for="calle">Calle</label>
							</div><!-- span c-3 -->
							<div class="span c-3">
								<input class="span c-12" name="numero-exterior"type="text" data-validation="number">
								<label class="span c-12" for="numero-exterior">Número exterior</label>
							</div><!-- span c-3 -->
							<div class="span c-3">
								<input class="span c-12" name="numero-interior"type="text">
								<label class="span c-12" for="numero-interior">Número interior</label>
							</div><!-- span c-3 -->
							<div class="span c-3">
								<input class="span c-12" name="colonia"type="text" data-validation="required">
								<label class="span c-12" for="colonia">Colonia</label>
							</div><!-- span c-3 -->

						</div><!-- renglon -->

						<div class="renglon clearfix">

							<div class="span c-3">
								<input class="span c-12" name="estado"type="text" data-validation="required">
								<label class="span c-12" for="estado">Delegación / Municipio</label>
							</div><!-- span c-3 -->
							<div class="span c-3">
								<input class="span c-12" name="ciudad"type="text" data-validation="required">
								<label class="span c-12" for="ciudad">Ciudad</label>
							</div><!-- span c-3 -->
							<div class="span c-3">
								<input class="span c-12" name="estado"type="text" data-validation="required">
								<label class="span c-12" for="estado">Estado</label>
							</div><!-- span c-3 -->
							<div class="span c-3">
								<input class="span c-12" name="cp"type="text" data-validation="number">
								<label class="span c-12" for="cp">C.P.</label>
							</div><!-- span c-3 -->

						</div><!-- renglon -->

						<div class="renglon clearfix">

							<div class="span c-12">
								<h3>¿Cómo te enteraste?</h3>
							</div><!-- span c-12 -->

						</div><!-- renglon -->

						<div class="renglon clearfix">

							<div class="span c-3">
								<input class="columna c-2" type="radio" name="enteraste" value="invitacion">
								<label class="columna c-10" for="">Invitación</label>
							</div><!-- span c-3 -->
							<div class="span c-3">
								<input class="columna c-2" type="radio" name="enteraste" value="espectacular">
								<label class="columna c-10" for="">Espectacular, anuncio o periódico</label>
							</div><!-- span c-3 -->
							<div class="span c-3">
								<input class="columna c-2" type="radio" name="enteraste" value="correo electrónico">
								<label class="columna c-10" for="">Correo electrónico</label>
							</div><!-- span c-3 -->
							<div class="columna c-1">
								<input class="columna c-4" type="radio" name="enteraste" value="otro">
								<label class="columna c-8" for="">Otro:</label>
							</div><!-- span c-3 -->

						</div><!-- renglon -->

						<div class="renglon clearfix">

							<div class="span c-12 hide" id="otro">
								<input class="span c-12" name="otro"type="text">
								<label class="span c-12" for="otro">Otro</label>
							</div><!-- span c-12 -->

						</div><!-- renglon -->

						<div class="renglon clearfix">

							<div class="span c-12">
                            	<div class="span c-12">
                                    <h3>Área de interés</h3>
                                </div><!-- span c-12 -->
                                <select class="span c-4" name="area">
                                	<option value="elige un área de interés" selected>Elige una</option>
                                    <option value="Deseo reducir mis inventarios">Deseo reducir mis inventarios</option>
                                    <option value="Etiqueta auto-adherible">Etiqueta auto-adherible</option>
                                    <option value="Etiqueta durable o de uso rudo">Etiqueta durable o de uso rudo</option>
                                    <option value="Etiqueta película termo-encogible">Etiqueta película termo-encogible</option>
                                    <option value="Etiqueta película envolvente BOPP">Etiqueta película envolvente BOPP</option>
                                    <option value="Etiqueta FDA (Food and Drug Administration)">Etiqueta FDA (Food and Drug Administration)</option>
                                    <option value="Etiquetas anti – falsificación">Etiquetas anti – falsificación</option>
                                    <option value="Impresión de alto volumen">Impresión de alto volumen</option>
                                    <option value="Impresión de mediano y bajo volumen">Impresión de mediano y bajo volumen</option>
                                    <option value="Impresión en alta definición">Impresión en alta definición</option>
                                    <option value="Otra">Otra</option>
                                </select>
								
							</div><!-- span c-12 -->

						</div><!-- renglon -->

						<div class="renglon clearfix acepto">

							<div class="columna c-4 medium-6">
								<input type="checkbox" name="mas-info" value="1" checked> Deseo recibir más información<br />
								<a href="pdf/Aviso_de_Privacidad_Etimex.pdf" target="_blank">Consulte la política de privacidad</a>
							</div>

							<div class="columna c-3 medium-6 right">
								<input class="boton columna c-12" type="submit" value="enviar">
							</div>


						</div><!-- renglon -->



					</form>

					<div class="span c-1 small-12 right">

						<img class="columna small-3" src="images/hp-logo.png" alt="">
						<img class="columna small-3" src="images/avery-logo.jpg" alt="">
						<img class="columna small-3" src="images/mintel-logo.jpg" alt="">
						<img class="columna small-3" src="images/wallace-church.jpg" alt="">

					</div><!-- columna c-2 -->

				</div><!-- width clearfix -->

			</div><!-- main -->

		</div><!-- container -->

		<footer>

		</footer>

	</body>

	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="js/etimex.js"></script>
    <script src="js/jquery.form-validator.min.js"></script>
    <script>
		$.validate();
	</script>
   <?php 
    	$msg = $_GET['registro'];
		if($msg != '')
			echo '<script>alert("¡Tus datos han sido registrados correctamente! Te llegará un correo a la dirección registrada.");</script>';	
    ?>
</html>

