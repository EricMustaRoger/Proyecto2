<?php session_start();

		//realizamos la conexión
	$conexion = mysqli_connect('localhost', 'root', '', 'bd_cromo');

		//le decimos a la conexión que los datos los devuelva diréctamente en utf8, así no hay que usar htmlentities
		$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");

		if (!$conexion) {
		    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}

		extract($_REQUEST);
		if(isset($_POST['submit'])){//to run PHP script on submit
		if(!empty($_POST['reservar'])){
		// Loop to store and display values of individual checked checkbox.
		foreach($_POST['reservar'] as $selected){
		echo $selected."</br>";
		}
		}
		}


		if (isset($_POST['reservar'])){
		echo $_POST['reservar']; // Displays value of checked checkbox.
		}   

		$sql = "UPDATE `tbl_recursos` SET `rec_disp` = b'0' WHERE `tbl_recursos`.`rec_id` = $reservar;";
		//UPDATE `tbl_recursos` SET `rec_disp` = b'0' WHERE `tbl_recursos`.`rec_id` = 4;

		//echo $sql."---------";
		



		$actualizar_recurso = mysqli_query($conexion, $sql);

	

		
		?>

		<?php
		//----------------inserts
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_cromo";



//realizamos la conexión
	$conexion = mysqli_connect('localhost', 'root', '', 'bd_cromo');
	$data = date("Y") . date("m") . date("d") . date("G") . date("i") . date("s");
	$usu_name = $_SESSION['usu_name'];
 	$res_fechaini = $data;
	$sql = "INSERT INTO tbl_reserva (rec_id, usu_id, res_fechaini)
	VALUES ($reservar, '$usu_name', $data)";


	$conexion->close();
	header('location: portfolio.php');
?>