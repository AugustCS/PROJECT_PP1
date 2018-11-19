<!DOCTYPE html>
<html>
<head>
<script src="jquery.js"></script>
<script src="logica.js"></script>
</head>
<body>
	<div class="box-cargado">
		<div class="box-cargado-left">
				<h1>REGISTRAR MAQUINARIA</h1>
			<form action="">
				<fieldset>
					<label>Nombre</label><br>
					<input class="textos-form" type="text" placeholder="Nombre de la Maquina" name="nom_maquinaria">
				</fieldset><br>
				<fieldset>
					<label>Proveedor</label><br>
					<input class="textos-form" type="text" placeholder="Proveedor de la Maquina" name="prov_maquinaria">
				</fieldset><br>
				<fieldset>
					<label>Descripción de la Maquina</label><br>
					<textarea class="textos-form ancho-ajustado" type="text" name="des_maquinaria">
					</textarea> 
				</fieldset><br>
				<fieldset>
					<label>Piezas de la Maquina</label><br>
					<textarea class="textos-form ancho-ajustado" type="text" name="piezas_maquinaria">
					</textarea> 
				</fieldset><br>
				<fieldset>
					<label>Costo Soles</label><br>
					<input class="textos-form" type="number" placeholder="Costo por hora" name="costosoles_maquinaria">
				</fieldset><br>
				<fieldset>
					<label>Costo Dolares</label><br>
					<input class="textos-form" type="number" placeholder="Costo por hora" name="costodolares_maquinaria">
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