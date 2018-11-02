<?php 
	include('conexion.php');
	$user = $_POST["username"];
	$pass = $_POST["password"];

	$sql = "SELECT *  FROM TBL_USUARIO WHERE USERNAME = :user AND PASS = :pass";
	$query = $conexion->prepare($sql);
	$query = bind
 ?>