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

	<div class="contenido-index">
		<div class="casa-calma">
			<div class="img1">
				<img src="img/imagen1.jpg">
			</div>
			<div class="text1">
				<h3>CASA CALMA</h3>
				<div class="linea-titulo"></div>

				<p>
				Casa Calma es un espacio creado para conectar con nuestra naturaleza, donde podemos hacer una pausa y tomar consciencia de nosotros mismos estando en calma dentro del movimiento de nuestras vidas diarias.
				</p>

				<a href="casa-calma.php">+Ver Más</a>
			</div>
		</div>

		<div class="yoga">
			<div class="text2">
				<h3>YOGA</h3>
				<div class="linea-titulo"></div>

				<p>
				La práctica de yoga nos permite tener un momento de relajación para conectar con nosotros mismos, ayudándonos a manejar el estrés y sentirnos bien con nosotros mismos. Yoga es la experiencia de la unidad, que todo lo contiene, tanto dentro de nosotros mismos como en relación a lo que nos rodea, todo es uno.<br><br>
				La práctica se yoga se puede realizar a través de diferentes estilos que tienen secuencias y técnicas distintas, pero todas tienen en común preparar al cuerpo para la meditación o incluyen la meditación en el movimiento. La meditación calma las fluctuaciones de nuestra mente y nos conecta con nuestra esencia natural, con nuestra alma, con el Universo.
				</p>

				<a href="yoga.php">+Ver Más</a>
			</div>
			<div class="img2">
				<img src="img/imagen2.jpg">
			</div>
		</div>

		<div class="tapita-huerta">
			<div class="img3">
				<img src="img/imagen3.jpg">
			</div>
			<div class="text3">
				<h3>TAPITA DE PUERTA</h3>
				<div class="linea-titulo"></div>

				<p>
				En Tapita de Huerta creamos alimentos artesanales saludables y al ritmo de los mantras. 
				</p>

				<a href="tapita-de-huerta.php">+Ver Productos</a>
			</div>
		</div>
	</div>

	<img class="img-derecha" src="img/borde1.jpg">
	<img class="img-izquierda" src="img/borde2.jpg">

	<?php
		include 'footer.php';
	?>
</body>

</html>