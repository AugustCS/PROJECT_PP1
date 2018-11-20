<?php 
	require "../conexion.php";
	$opciones_estados = $conexion->prepare("SELECT * FROM bd_famitec.TBL_ESTADO_MAQ");
	$opciones_estados->execute();
	$datos_opciones = $opciones_estados->fetchAll();
	foreach($datos_opciones as $estados){
?>
			<option value="<?php print $estados[0];?>"><?php print $estados[1]; ?></option>
<?php
	}

 ?>