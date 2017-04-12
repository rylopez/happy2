<?php
session_start();
		
		//1. llamar  la conexion de la base de datos
		require_once("../model/db_conn.php");
		//2. llamar las  clases necesarias o que se requieran
		require_once("../model/pedidos.class.php");
		//3. instanciamos las variables globales y una llamada  $accion
		// la variable accion nos va  a indicar  que parte cel crud vamos a crear.
		$accion=$_REQUEST["acc"];
		switch ($accion) {
	    case 'd':
	    $id_pedido=$_SESSION["id_pedido"];
	    $id_producto=base64_decode($_REQUEST["ui"]);
	    $id_usuario=$_SESSION["id_usuario"];
	    $pedido=Gestion_Pedidos::validaidpedido($id_usuario);
	    $total_temp=base64_decode($_REQUEST["total"]);
	    $total=$pedido["total"]-$total_temp ;
	   
	    try {   
	    	    Gestion_Pedidos::updatetotal($total,$id_pedido);
				Gestion_Pedidos::deletedetalle($id_pedido,$id_producto);
				$tipomsn = base64_encode("success"); 
				$msn= base64_encode("Se ha retirado correctamente la REFERENCIA,de su lista de pedidos");	
						
		 } catch (Exception $e) {
				 $m=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			         }
			    header("location: ../view/index.php?p=".base64_encode('detallecomprar')."&m=".$msn."&tm=".$tipomsn);


	    break;
}
?>