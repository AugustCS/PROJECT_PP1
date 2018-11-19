<?php 
	require '../conexion.php';
	$tag=$_POST["tag"];

	if(isset($tag) && $tag!==""){

		if($tag=='registrar_personal'){
			$nom_personal = $_POST["nom_personal"];
			$dni_personal = $_POST["dni_personal"];
			$correo_personal = $_POST["correo_personal"];
			$usuario_personal = $_POST["usuario_personal"];
			$pass_personal = $_POST["pass_personal"];
			$estado_personal = $_POST["estado_personal"];
			$niv_personal = $_POST["niv_personal"];

			$inser_personal = $conexion->prepare("INSERT INTO bd_famitec.TBL_PERSONAL(NOM_PERSONAL,DNI_PERSONAL,EMAIL_PERSONAL,USERNAME,PASS,ESTADO,NIVEL) 
            VALUES(:NOM_PERSONAL,:DNI_PERSONAL,:EMAIL_PERSONAL,:USERNAME,:PASS,:ESTADO,:NIVEL);");
            $inser_personal->bindParam(':NOM_PERSONAL',$nom_personal);
            $inser_personal->bindParam(':DNI_PERSONAL',$dni_personal);
            $inser_personal->bindParam(':EMAIL_PERSONAL',$correo_personal);
            $inser_personal->bindParam(':USERNAME',$usuario_personal);
            $inser_personal->bindParam(':PASS',$pass_personal);
            $inser_personal->bindParam(':ESTADO',$estado_personal);
            $inser_personal->bindParam(':NIVEL',$niv_personal);
			print true;
		}else{
			print false;
		}

		if($tag=='registrar_material'){
			$nom_material = $_POST["nom_material"];
			$des_material = $_POST["des_material"];
			$costo_material = $_POST["costo_material"];
			$medida_material = $_POST["medida_personal"];

            $inser_material = $conexion->prepare("INSERT INTO bd_famitec.TBL_MATERIALES(DES_MATERIAL,COSTO_MATERIAL,UNI_MEDIDA,NOM_MATERIAL)
                VALUES(:DES_MATERIAL,:COSTO_MATERIAL,:UNI_MEDIDA,:NOM_MATERIAL);");
             $inser_material->bindParam(':DES_MATERIAL',$des_material);
             $inser_material->bindParam(':COSTO_MATERIAL',$costo_material);
              $inser_material->bindParam(':UNI_MATERIAL',$medida_material);
               $inser_material->bindParam(':NOM_MATERIAL',$nom_material);
			print true;
		}else{
			print false;
		}

		if($tag=='registrar_maquinaria'){
			$nom_maquinaria = $_POST["nom_maquinaria"];
			$prov_maquinaria = $_POST["prov_maquinaria"];
			$des_maquinaria = $_POST["des_maquinaria"];
			$costosoles_maquinaria = $_POST["costosoles_maquinaria"];
			$costodolares_maquinaria = $_POST["costodolares_maquinarias"];

			$inser_maquinaria = $conexion->prepare("INSERT INTO bd_famitec.TBL_MAQUINARIA(NOM_MAQUINARIA,PROVEEDOR_MAQUINARIA,DES_MAQUINARIA,PIEZAS_MAQUINARIAS,COSTO_HORA_SOLES,COSTO_HORA_DOLARES) 
            VALUES(:NOM_MAQUINARIA,:PROVEEDOR_MAQUINARIA,:DES_MAQUINARIA,:PIEZAS_MAQUINARIAS,:COSTO_HORA_SOLES,:COSTO_HORA_DOLARES);");
            $inser_maquinaria->bindParam(':NOM_MAQUINARIA',$nom_maquinaria);
            $inser_maquinaria->bindParam(':PROVEEDOR_MAQUINARIA',$prov_maquinaria);
            $inser_maquinaria->bindParam(':DES_MAQUINARIA',$des_maquinaria);
            $inser_maquinaria->bindParam(':PIEZAS_MAQUINARIAS',$piezas_maquinaria);
            $inser_maquinaria->bindParam(':COSTO_HORA_SOLES',$costosoles_maquinaria);
            $inser_maquinaria->bindParam(':COSTO_HORA_DOLARES',$costodolares_maquinaria);
			print true;
		}else{
			print false;
		}

	}

 ?>