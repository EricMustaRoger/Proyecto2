<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recepción de los datos</title>
</head>
<body>
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
				echo "Nombre Recurso: " . $recurso['rec_nombre'] . "<br/>";
				echo "Foto: " . $recurso['rec_foto'] . "<br/>";
				echo "Data  robatori: " . $recurso['anu_'] . "<br/>";
				echo "Descripcion del robo: " . $anuncio['anu_descripcio_robatori'] . "<br/>";
				echo "Marca: " . $anuncio['anu_marca'] . "<br/>";
				echo "Modelo: " . $anuncio['anu_model'] . "<br/>";
				echo "Color: " . $anuncio['anu_color'] . "<br/>";
				echo "Antiguedad: " . $anuncio['anu_antiguitat'] . "<br/>";
				echo "Descripcion bici: " . $anuncio['anu_descripcio'] . "<br/>";
				echo "Numero de serie: " . $anuncio['anu_numero_serie'] . "<br/></td>";
				$foto='img/'.$anuncio['anu_foto'];
				if (file_exists ($foto)){
					echo "<td><img src='" . $foto . "' width='150'/><br/><br/>";
				} else {
					echo "<td><img src='img/0.jpg' width='150'/><br/><br/>";
				}
				echo "Compesacion: " . $anuncio['anu_compensacio'] . "<br/></td><tr><table>";
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
</body>
</html>