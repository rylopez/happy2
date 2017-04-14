<?php
session_start();
		
		
		require_once("../model/db_conn.php");
		
		require_once("../model/pedidos.class.php");
	    require_once("../model/productos.class.php");
		
		$accion=$_REQUEST["acc"];
		switch ($accion) {
	    case 'd':
	    $id_pedido=$_SESSION["id_pedido"];
	    $id_producto=base64_decode($_REQUEST["ui"]);
	    
	    
	   
	    try {   
				Gestion_Pedidos::deletedetalle($id_pedido,$id_producto);
				$total=Gestion_Pedidos::totaldetallepedido($id_pedido);
	    	    Gestion_Pedidos::updatetotal($total["total"],$id_pedido);
				$tipomsn = base64_encode("success"); 
				$msn= base64_encode("Se ha retirado correctamente la REFERENCIA,de su lista de pedidos");	
						
		 } catch (Exception $e) {
				 $m=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			         }
			    header("location: ../view/index.php?p=".base64_encode('detallecomprar')."&m=".$msn."&tm=".$tipomsn);


	    break;
	    case 'c':
	    $id_pedido=$_POST["id_pedido"];
	    $prod=Gestion_Pedidos::ReadDetalle($id_pedido);
       
        foreach ($prod as $ro ) {
        	$cantidad=$ro["cantidad"];
        	$id_producto=$ro["id_producto"];
        	$cant_producto=Gestion_Productos::Readbyid($id_producto);

            if ($cant_producto["cantidad"]<$cantidad){
            	$tipomsn = base64_encode("warning"); 
				$msn= base64_encode("Solo disponemos de ".$cant_producto["cantidad"]." unidades del producto ".$ro["referencia"]." ".$ro["nombre"].".");

				header("location: ../view/index.php?p=".base64_encode('detallecomprar')."&m=".$msn."&tm=".$tipomsn);
				return FALSE; 
				

            
        }
    }
        foreach ($prod as $row ) {
        	$cantidad=$row["cantidad"];
        	$id_producto=$row["id_producto"];
        	$cant_producto=Gestion_Productos::Readbyid($id_producto);
        	$cantidad=$cant_producto["cantidad"]-$cantidad;
        	try {   
				Gestion_Productos::Updatecantidad($cantidad,$id_producto);
				
		 } catch (Exception $e) {
				 $m=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			         }

           
        }

	    try {   
	    	    $estado=2;
				Gestion_Pedidos::Updateestado($estado,$id_pedido);				
				$tipomsn = base64_encode("success"); 
				$msn= base64_encode("Gracias Por su compra, Muy pronto estaremos enviando su Pedido hasta la dirreccion registrada");	
						
		 } catch (Exception $e) {
				 $m=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			         }
			   unset($_SESSION['id_pedido']);
			    header("location: ../view/index.php?p=".base64_encode('viewproducto')."&m=".$msn."&tm=".$tipomsn);


	    break;
	    case 'ue':
	    $estado=$_POST["estado"];
	    $id_pedido=$_POST["id_pedido"];
	    $correo=$_POST["correo"];
	    $nombre=$_POST["nombre"];
	    $apellido=$_POST["apellido"];
	    $dirreccion=$_POST["dirreccion"];
	    $ciudad=$_POST["ciudad"];

	    if($estado==3){
	    	
            $titulo    = 'CONFIRMACION ENVIO PEDIDO -HAPPY- sex AND live';
           $mensaje   = 'Hola '.$nombre.' '.$apellido.'.\r\n Por medio de este mensaje le confirmamos \r\n que su pedido  será entregado en los proximos días.\r\n  En la dirección:'.$dirreccion.'\r\n En la ciudad:'.$ciudad.'. \r\n ¡GRACIAS POR SU COMPRA!.';
 

           $bool=mail($correo, $titulo, $mensaje);
             if($bool){
        echo "Mensaje enviado";
         }else{
       echo "Mensaje no enviado";
}

	    }
         try {   
	    	   
				Gestion_Pedidos::Updateestado($estado,$id_pedido);				
				$tipomsn = base64_encode("success"); 
				$msn= base64_encode("Se ha modificado Pedido correctamente");	
						
		 } catch (Exception $e) {
				 $m=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
			         }
			   unset($_SESSION['id_pedido']);
			    header("location: ../view/dashboard.php?p=".base64_encode('gestion_pedidos')."&m=".$msn."&tm=".$tipomsn);

	    break;


}
?>