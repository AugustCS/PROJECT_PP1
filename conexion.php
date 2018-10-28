<?php
	$host = 'localhost';
	$dbname= 'BD_FAMITEC';
	$user= 'root';
	$pass= '';
	$conexion=null;

	try {
		$conexion = new PDO('mysql:host'.$host.";dbname=".$dbname,$user,$pass);
		print 'CONEXION OK';
	} catch (PDOException $e) {
		echo 'ERROR: ' . $e -> getMessage();
	} finally{
		return $conexion;
	}

?>