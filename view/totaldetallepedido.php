<?php

require_once("../model/db_conn.php");
require_once("../model/pedidos.class.php");
$cantidad=$_POST["cant"];
$id_producto=$_POST["id_pro"];
$id_pedido=$_POST["id_ped"];
try {           Gestion_Pedidos::updatecantidad($cantidad,$id_pedido,$id_producto);
	            $total=Gestion_Pedidos::totaldetallepedido($id_pedido);
	    	    Gestion_Pedidos::updatetotal($total["total"],$id_pedido);
					
						
		 } catch (Exception $e) {
				 $m=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			         }
      echo $total["total"];
?>