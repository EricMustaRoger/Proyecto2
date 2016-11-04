<!DOCTYPE html>
<html>
<head>
	<title>resultados filtro</title>
</head>
<body>
	<table border>
	<a href="cerrar.php">Cerrar Sesion</a></br>
	<?php 

	try{
		

		$conexion = new PDO('mysql:host=localhost;dbname=bd_cromo','root','');

		$statement = $conexion->prepare('SELECT * FROM tbl_recursos');
		// $statement->execute(array());

		///// voy por aquí//////
		$statement->execute();
		$resultados = $statement->fetchAll();
		?>
		<form action="incidencias_realizar.php" method="GET">
		
		<?php
		foreach ($resultados as $recursos) {
			$id = $recursos['rec_id'];
			$name = $recursos['rec_name'];
			echo $id . "------ ";
			echo "<input type='radio' name='rec_id' value='$id' > $name";
			echo "<textarea rows='4' cols='20' style='resize:none' name='inc_comentario$id'></textarea><br>";
			// echo "<tr><td>" . $recursos['rec_id'] . "</td><td>" . $recursos['rec_name'] . "</td><td>" . $recursos['rec_tipo'] . "</td><td>" . $recursos['rec_disp'] . "</td><td>" . $recursos['rec_foto'] . "</td></tr>";
		}?>
		<input type="submit" name="enviar"><?php






		// $variables = "";
		// $parametres = array();
		// if ($anu_numero_serie != "") {
		// 	$variables = 'anu_numero_serie = ? ';
		// 	$parametres[]=$anu_numero_serie;
		// }
		// $statement = $conexion->prepare($select);
		// $statement->execute();
		
		// $resultados = $statement->fetchAll();
		// foreach ($resultados as $recursos) {
		// 	$foto='img/'. $recursos['anu_foto'];
		// 	if (file_exists ($foto)){
		// 			echo "<tr><td><img src='" . $foto . "' width='30'/></td>";
		// 		} else {
		// 			echo "<tr><td><img src='img/recursos0.jpg' width='30'/></td>";
		// 		}
		// 	echo "<td>" . $recursos['anu_titol'] . "</td><td>" . date("d/m/Y", strtotime($recursos['anu_data_anunci'])) . "</td><td>" . "+info</td>";
		// }
			
		$conexion = null;

	}catch(PDOExeption $e){
		echo "Error: " . $e->getMessage();

	}



	?>
	</tr></table>
</body>
</html>
