<!DOCTYPE html>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>CASA CALMA</title>
	<meta name="author" content="Brandemma" />
	<meta name="description" content="" />
	

<!--================== 	ENLACE HOJA DE ESTILOS (INICIA)  =====================-->

	<link rel="stylesheet" type="text/css" href="css/estilos.css">

<!--================== 	ENLACE HOJA DE ESTILOS (TERMINA)  =====================-->

<!--================== 	ENLACE ICONO (INICIA)  =====================-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!--================== 	ENLACE ICONO (TERMINA)  =====================-->

<!--================== 	SCRIPT PARA SLIDER (INICIA)  =====================-->

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!--================== 	SCRIPT PARA SLIDER (TERMINA)  =====================-->

</head>

<body>

	<header>
		<?php
			include 'cabecera-menu.php';
		?>
	</header>

	<div class="contenido-contacto">
		<div class="tit-contacto">
			<h2>CONTÁCTANOS</h2>
			<div class="linea-titulo"></div>
		</div>

		<div class="formulario">
			<h3>INFORMES</h3>
			<div class="linea-titulo"></div>
			<form class="form-main" name="ajax-form" id="ajax-form" method="POST" action="php/mensaje-contacto.php">
					<div class="centrado verde" id="ajaxsuccess">*El Email ha sido enviado satisfactoriamente.*</div>

					<div class="campos-formulario">
						<label>Nombre</label><br>
						<input name="nombre" id="nombre" type="text" onfocus="if(this.value == 'Nombre') this.value='';" onblur="if(this.value == '') this.value='';">
						<div class="clear"></div>
						<div class="error" id="err-nombre">*Por favor introduce tu nombre*</div><br>
					</div>

					<div class="campos-formulario">
						<label>Email</label><br>
						<input name="email" id="email" type="email" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='';">
						<div class="clear"></div>
						<div class="error" id="err-email">*Por favor introduce tu e-mail*</div>
					    <div class="error" id="err-emailvld">*El formato de E-mail no es valido*</div><br>
				    </div>

					<div class="mensaje-formulario">
					<label>Mensaje</label><br>
						<textarea name="mensaje" id="mensaje" COLS=20 ROWS=4 onfocus="if(this.value == 'Mensaje') this.value='';" onblur="if(this.value == '') this.value='';"></textarea>
						<div class="clear"></div>
						<div class="error" id="err-mensaje">*Por favor escribe un mensaje*</div><br>
					</div>

					<div class="clear"></div>

					<div class="error centrado" id="err-form">*Hubo un problema al validar el formulario por favor verifica!*</div>
					<div class="error centrado" id="err-timedout">*El tiempo de conexión con el servidor a expirado!*</div>
					<div class="error" id="err-state"></div><br>
					<button class="boton" id="send" class="btn btn-primary boton-enviar">Enviar</button>

					<div class="clear"></div>
				</form>
				<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
				<script type="text/javascript" src="js/bootstrap.min.js"></script>  	
			  	<script type="text/javascript" src="js/functions.js"></script>


			  	<div class="info-contacto">
			  		<p>
			  			<a href="tel: 943571541" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;"><img src="img/contacto.gif"> 943 571 541</a><br>
			  			<a href="mailto:edopf@casacalma.com"><img src="img/carta.gif"> edopf@casacalma.com</a><br>
			  			<a href=""><img src="img/facebook.gif"> facebook.casacalma</a>
			  		</p>
			  	</div>
		  	</div>
		<img src="img/imagen-contacto.jpg">
		
	</div>

	<?php
		include 'footer.php';
	?>
</body>

</html>