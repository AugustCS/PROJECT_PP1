<?php 
session_start();
if(!isset($_SESSION["usuario"])){
	header("location:index.php");
}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>FAMITEC S.A.C.</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
 	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="img/icon.png">
</head>
<body>
	<!-- <div class="bar-sup">
		<img src="img/logoa.png">
		<h1>FAMITEC S.A.C.</h1>
	</div>  -->
	<div class="bar-lat">

		<img src="img/LogoFamitec.jpg" title="FAMITEC S.A.C.">
		<h2> MENU <i class="fas fa-bars"></i></h2>

		<h3 class="t-1"><i class="fas fa-file-signature"></i> REGISTROS </h3>
		<div class="menu-lat lat-1">
			<a id="reg-usuario">Registro Usuarios</a>
			<a id="reg-personal">Registro Personal</a>
			<a id="reg-maquinaria">Registro Maquinaria</a>
			<a id="reg-material">Registro Material</a>
			<a id="control-maq">Control Maquinaria</a>
		</div>

		<h3 class="t-2"><i class="fas fa-chart-pie"></i> CONSULTAS </h3>
		<div class="menu-lat lat-2">
			<a href="">Maquinaria</a>
			<a href="">Control de Mantenimiento</a>
			<a href="">Sub Opcion 2</a>
			<a href="">Sub Opcion 2</a>
		</div>

		<h3 class="t-3"><i class="fas fa-edit"></i> MODIFICACIONES </h3>		
		<div class="menu-lat lat-3">
			<a href="">Maquinaria</a>
			<a href="">Usuarios</a>
			<a href="">Sub Opcion 3</a>
			<a href="">Sub Opcion 3</a>
		</div>
	</div>
	<div class="bar-content">
		<div class="box-data-user">
			<div class="box-user">
				<span id="linkusuario">Bienvenido ADMIN  <i class="far fa-user-circle"></i> <i class="fas fa-angle-down"></i></span>
				<div class="box-hide-user">
					<a href="cerrar_sesion.php" style="color:white;">Cerrar Sesion <i class="fas fa-times-circle"></i></a>
			</div>
		</div>
				<div class="clear"></div>
		</div>
		<div class="box-contenido">
			<!--CAJA DE CONTENIDO-->
	    </div>
	<div class="clear"></div>
	<script src="js/jquery.js"></script>
	<script src="js/logica.js"></script>
</body>
</html>