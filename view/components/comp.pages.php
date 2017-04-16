<?php

if(isset($_GET["p"])){
	$page = base64_decode($_GET["p"]);
}else{
	$page = "";
}

switch ($page) {
	case '':
		require_once("inicio.php");
		break;
	case 'viewproducto':
		require_once("viewproductos.php");
	break;	
	case 'viewpublicaciones':
		require_once("viewpublicaciones.php");
	break;
	
	case 'detallecomprar':
		require_once("detallecomprar.php");
	break;	
	case 'historialpedido':
		require_once("historialpedido.php");
	break;
	


	
	


}
?>
