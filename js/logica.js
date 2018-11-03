$(document).ready(function(){

	$(".menu-lat li").click(function(){
		$(".menu-sub-lat").toggle("fast");
	})

	function menulateral(menu,lista){
		$(menu).click(function(){
			$(lista).toggle("fast");
		})
	}

	menulateral(".t-1",".lat-1");
	menulateral(".t-2",".lat-2");
	menulateral(".t-3",".lat-3");
	menulateral(".t-4",".lat-4");

	$("#linkusuario").click(function(){
		$(".box-hide-user").toggle("fast");
	})

	$(".menu-lat a").click(function(e){
		e.preventDefault();
	})

	function lanzarContenido(link,contenido,archivo){
		$(link).click(function(){
			$(".menu-lat a").removeClass("active");
			$(contenido).load(archivo);
			$(link).addClass("active");
		})
	}

	lanzarContenido("#reg-usuario",".box-contenido","reg_usuario.php");
	lanzarContenido("#reg-personal",".box-contenido","reg_personal.php");
	lanzarContenido("#reg-maquinaria",".box-contenido","reg_maquinaria.php");
    lanzarContenido("#reg-material",".box-contenido","reg_material.php");
    lanzarContenido("#control-maq",".box-contenido","cont_maquinaria.php");
})