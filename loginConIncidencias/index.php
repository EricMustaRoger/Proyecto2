<?php session_start();

if (isset($_SESSION['usu_name'])) {
	header('Location: incidencias.php');
} else {
	header('Location: login.php');
}

 ?>