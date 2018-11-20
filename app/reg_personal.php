<!DOCTYPE html>
<html>
<head>
	<script>
		function soloNumeros(e){
	       key = e.keyCode || e.which;
	       tecla = String.fromCharCode(key).toLowerCase();
	       numeros = "0123456789.";
	       especiales = "8-37-39-46";

	       tecla_especial = false
	       for(var i in especiales){
	            if(key == especiales[i]){
	                tecla_especial = true;
	                break;
	            }
	        }
	        if(numeros.indexOf(tecla)==-1 && !tecla_especial){
	            return false;
	        }
	    }
    </script>
    <script src="js/jquery.js"></script>
    <script src="js/logica.js"></script>
</head>
<body>
	<div class="box-cargado">
		<div class="box-cargado-left">
				<h1>REGISTRAR PERSONAL</h1>
			<form id="form-reg-personal" method="POST">
				<fieldset>	
					<label>Nombres y Apellidos</i></label><br>
					<input class="textos-form" type="text" placeholder="Escribe aqui" name="nom_personal">
				</fieldset><br>
				<fieldset>
					<label>DNI</label><br>
					<input onkeypress="return soloNumeros(event)" class="textos-form" type="text" placeholder="Escribe aqui" maxlength="8" name="dni_personal">
				</fieldset>
				<fieldset><br>
					<label>Correo</label><br>
					<input class="textos-form" type="email" placeholder="Escribe aqui" name="correo_personal">
				</fieldset><br>
				<fieldset>
					<label>Usuario</label><br>
					<input class="textos-form" type="text" placeholder="Escribe aqui"name="usuario_personal">
				</fieldset><br>
				<fieldset>
					<label>Contraseña</label><br>
					<input class="textos-form" type="password"placeholder="Escribe aqui" name="pass_personal">
				</fieldset><br>
					<fieldset>
					<label>Estado</label><br>
					<select class="textos-form" name="estado_personal">
						<option value="1">Habilitado</option>
						<option value="0">No Habilitado</option>
					</select>
				</fieldset><br>
				<fieldset>
					<label>Nivel</label><br>
					<select class="textos-form" name="niv_personal">
						<option value="1">Administrador</option>
						<option value="2">Jefe</option>
						<option value="3">Empleado</option> 
					</select>
				</fieldset><br>
				<fieldset>
					<input class="btn btn-success" type="submit" value="Grabar">
					<input class="btn btn-primary"type="reset" value="Limpiar">
				</fieldset>
			</form>
		</div>
		<div class="box-cargado-right">	
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>