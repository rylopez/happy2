<?php
session_start();


 $p=$_POST["pag"];
 $ui =$_REQUEST["uid"];
 

switch ($p) {
	case '':
		require_once("inicio.php");
		break;
	case 'gestion_usuarios':
		require_once("Gestion_usuarios.php");
	break;	

	case 'logueo':

		require_once("logueo.php");
	break;

	case 'actualizar_usuario':

		require_once("ActualizarUsuario.php");
	break;

	case 'nuevo_usuario':

		require_once("nuevo_usuario.php");
	break;

	case 'gestion_productos':

		require_once("Gestion_productos.php");
	break;

	case  'nuevo_producto':

	 require_once("nuevo_producto.php");
	break;


	case  'actualizar_producto':

	 require_once("ActualizarProducto.php");
	break;


case  'actualizar_foto_producto':

	 require_once("ActualizarFotoProducto.php");
	break;
	
case 'gestion_publicaciones':

		require_once("Gestion_publicaciones.php");
	break;

	case  'nueva_publicacion':

	 require_once("nueva_publicacion.php");
	break;


	case  'actualizar_publicacion':

	 require_once("ActualizarPublicacion.php");
	break;


case  'actualizar_file_publicacion':

	 require_once("actualizarfilepublicacion.php");
	break;
case  'gestion_views':

	 require_once("gestion_views.php");
	break;
	case  'detalle_producto':

	 require_once("detalle_producto.php");
	break;

	case  'detalle_publicacion':

	 require_once("detalle_publicacion.php");
	break;
	case  'ver_pedido':

	 require_once("ver_pedido.php");
	break;

}


?>
