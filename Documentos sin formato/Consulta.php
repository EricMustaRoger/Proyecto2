<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recepción de los datos</title>
</head>
<body>
<form name="f1" action="consulta2.php" method="GET" onsubmit="return validar();">
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
				echo "Nombre Recurso: " . $recurso['rec_name'] . "<br/>";
			
				echo "Tipo Recurso: " . $recurso['rec_tipo'] . "<br/>";
				$num=$recurso['rec_id'];
				?>
				<input type="checkbox" name="reservar[]" value="<?php echo $num; ?>"/>Reservar<br/>
				<?php 
				echo $num;
				$foto='img/'.$recurso['rec_foto'];
				if (file_exists ($foto)){
					echo "<img src='" . $foto . "' width='150'/><br/><br/>";
				} else {
					echo "<img src='img/0.jpg' width='150'/><br/><br/>";
				}
			}
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

	
<input type="submit" value="Enviar"/>
</body>
</html>