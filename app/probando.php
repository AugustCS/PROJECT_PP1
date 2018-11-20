<?php 

			require "../conexion.php";

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

            $inser_personal->execute();
            print "INSERTADO CORRECTAMENTE";
 ?>