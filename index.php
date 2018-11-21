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
	<div class="body-login">
		<div class="box-login">

			<h1>PROBANDO</h1>

			<h2 class="icon-login"><i class="far fa-user"></i></h2>

			<form class="box-form" action="validacion_login.php" method="POST">
				<fieldset>
					<input type="text" placeholder="Usuario" name="username" required></input>
				</fieldset>
				<fieldset>
					<input type="password" placeholder="Contraseña" name="password" required></input>
				</fieldset>
				<fieldset>
				 	<input style="width:80%;" type="submit" value="INGRESAR" class="btn btn-primary">
				 </fieldset>
			</form>

		</div>
	</div>
	
</body>
</html>