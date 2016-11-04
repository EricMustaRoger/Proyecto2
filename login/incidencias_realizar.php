<?php session_start();

if (isset($_SESSION['usu_name'])) {
	require 'views/incidencias_realizar.view.php';
	$id = $_POST['rec_id'];
	echo $id;
	

} else {
	header('Location: login.php');
}



?>