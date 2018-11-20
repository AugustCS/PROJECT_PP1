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
			<h1>REGISTRAR MATERIAL</h1>
		<form action="">
			    <fieldset>
					<label>Nombre</label><br>
					<input class="textos-form" type="text" placeholder="Nombre del Material" name="nom_material">
				</fieldset><br>
				<fieldset>
					<label>Descripción del Material</label><br>
					<textarea class="textos-form ancho-ajustado" type="text" name="des_material">
					</textarea>
				</fieldset><br>
					<fieldset>
					<label>Costo</label><br>
					<input onkeypress="return soloNumeros(event)"class="textos-form" type="text" placeholder="Costo unitario del Material" name="costo_material">
				</fieldset><br>
				<fieldset>
					<label>Unidad de Medida</label><br>
					<input class="textos-form" type="text" placeholder="Unidad de Medida del Material" name="medida_material">
				</fieldset><br>
				<fieldset>
					<input class="btn btn-success" type="submit" value="Grabar">
					<input class="btn btn-primary" type="reset" value="Limpiar">
				</fieldset>
		</form>
		</div>
		<div class="box-cargado-right">	
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>