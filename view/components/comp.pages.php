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

	
	


}
?>
