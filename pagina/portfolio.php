<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cromo</title>
	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<form>
	
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><!-- <?php echo "$usu_name" ?> -->Quitar comentario despues de conectar con la bbdd</h1>
				<nav role="navigation">
					<ul>
						

						<li><a class="active" href="portfolio.html">Recursos</a></li>

						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<div id="fh5co-work-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Disponibilidad de recursos</h2>
					<!--<p><span>Created with <i class="sl-icon-heart"></i> by the fine folks at <a href="http://freehtml5.co">FreeHTML5.co</a></span></p>-->
				</div>
			</div>
			<div class="row">
					
<?php
	$conexion = mysqli_connect('localhost', 'root', '', 'bd_cromo');
		//le decimos a la conexión que los datos los devuelva diréctamente en utf8, así no hay que usar htmlentities
		$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");
		if (!$conexion) {
		    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}
		//llamamos a la función extract para extraer los datos del array $_REQUEST y lo meta todo en las variables del mismo nombre del html
		extract($_REQUEST);

		$sql = "SELECT * FROM tbl_recursos ";
		//valores entre fechas minimo y maximo
		
		$sql.="WHERE (rec_disp=1)";

		
		
		//echo $tl;  
		echo $sql;
		
		
		//echo "---$sql---<br/><br/>";
		$reservas = mysqli_query($conexion, $sql);
		//$anuncios = mysqli_query($conexion, $tl);
		
		if(mysqli_num_rows($reservas)!=0){
			echo "Número de productos: " . mysqli_num_rows($reservas) . "<br/><br/>";
			while($recurso = mysqli_fetch_array($reservas)){
			?>		
			<div class="col-md-3 text-center">
					<div class="work-inner">
						<a href="#" class="work-grid" style="background-image: url
				(<?php 

				echo "$foto='img/'.$recurso['rec_foto']";

				echo " if (file_exists ($foto)){";
					echo "<img src='" . $foto . "' width='150'/><br/><br/>";
				echo "} else {";
					echo "<img src='img/0.jpg' width='150'/><br/><br/>";
				}
				?>);">
						</a>
						<div class="desc">
							<h3><a href="#"><?php echo $recurso['rec_name'] ?></a></h3>
							<span><?php echo $recurso['rec_tipo'] ?></span>
						<input type="checkbox" name="reservar[]" value="<?php echo $num; ?>"/>Reservar<br/>
						</div>
					</div>
				</div>

				<?php

		} else {
			echo " <br/> <br/>No hay datos que mostrar!";
		}
		
		mysqli_close($conexion);
		/*
		//empezamos a mostrar todos los datos
		echo "Fecha " . $fecha_robatori . "<br/>";
		echo "Lugar: " . $lugar . "<br/>";
		echo "Marca bici: " . $marca . "<br/>";
		echo "Modelo bici: ". $modelo . "<br/>";
		echo "Antiguedad: ". $Antiguedad . "<br/>";
		echo "numero serie: ". $numeroserie . "<br/>";
		echo "Color :". $color . "<br/>";
		*/
	?>
					
				
			</div>
		</div>
	</div>
	</form>
	<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			<!--<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>About Us</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
			</div>-->
			
			<div class="col-md-12 fh5co-copyright text-center">
				<p>&copy; 2016 Proyecto 2 <span>Designed with <i class="icon-heart"></i> by Roger/Eric/Musta</span></p>	
			</div>
			
		</div>
	</footer>
	</div>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
