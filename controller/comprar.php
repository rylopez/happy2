<?php 
    session_start();

      if(!isset($_SESSION["id_usuario"])){ 
        $msn=base64_encode(":(  Los entimos, para realizar compras debe estar registrado en sistema y haber iniciado sesión");
        $tipom=base64_encode("warning"); 
         header("location: ../view/index.php?m=".$msn."&tm=".$tipom);   }
      else{
      	 require_once("../model/db_conn.php");
         require_once("../model/pedidos.class.php");
         require_once("../model/productos.class.php");


         $id_usuario=$_SESSION["id_usuario"];
         $id_producto=base64_decode($_REQUEST["ui"]);               
         $prod=Gestion_Productos::ReadbyId($id_producto);
         $exist=Gestion_Pedidos::veref_pedido($id_usuario);

         if (count($exist)==0) {
         	
         $total=$prod["valor_venta"]+($prod["valor_venta"]*$prod["iva"]/100)-($prod["valor_venta"]*$prod["descuento"]/100);
         $forma_pago="contra entrega";
         $estado=1;
               try {
				Gestion_Pedidos::Createpedido($id_usuario,$estado,$total,$forma_pago);
				$msn= base64_encode("Su registro se creo correctamente :D");	
				$tipom=base64_encode("success");
				} catch (Exception $e) {
				 $msn=base64_encode(":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine());
				 $tipom=base64_encode("warning");
				}

				$pedido=Gestion_Pedidos::validaidpedido($id_usuario);
				$id_pedido=$pedido["id_pedido"];

				$cantidad=1;
				try {
				Gestion_Pedidos::Createdetallepedido($id_pedido,$id_producto,$cantidad);
				$msn= base64_encode("Su registro se creo correctamente :D");	
				$tipom=base64_encode("success");
				} catch (Exception $e) {
				 $msn=base64_encode(":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine());
				 $tipom=base64_encode("warning");
				}
				$_SESSION["id_pedido"]     = $pedido["id_pedido"];
				header("location: ../view/index.php?p=".base64_encode("detallecomprar"));
				



         }else{
                
                $pedido=Gestion_Pedidos::validaidpedido($id_usuario);
         	    $id_pedido=$pedido["id_pedido"];
         	    $valpedprod=Gestion_Pedidos::validadetalleprod($id_pedido,$id_producto);

             if (count($valpedprod)==0) {
				$cantidad=1;
				try {
				Gestion_Pedidos::Createdetallepedido($id_pedido,$id_producto,$cantidad);
				$msn= base64_encode("Su registro se creo correctamente :D");	
				$tipom=base64_encode("success");
				} catch (Exception $e) {
				 $msn=base64_encode(":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine());
				 $tipom=base64_encode("warning");
				}
				$_SESSION["id_pedido"]     = $id_pedido;
				$total=$pedido["total"]+($prod["valor_venta"]+($prod["valor_venta"]*$prod["iva"]/100)-($prod["valor_venta"]*$prod["descuento"]/100));
				try {
				Gestion_Pedidos::updatetotal($total,$id_pedido);
				$msn= base64_encode("Su registro se creo correctamente :D");	
				$tipom=base64_encode("success");
				} catch (Exception $e) {
				 $msn=base64_encode(":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine());
				 $tipom=base64_encode("warning");
				}
				header("location: ../view/index.php?p=".base64_encode("detallecomprar"));
			}else{
				$msn= base64_encode("El producto ya se encuentra en su carrito de Compras");	
				$tipom=base64_encode("warning");
				header("location: ../view/index.php?p=".base64_encode("viewproducto")."&m=".$msn."&tm=".$tipom);
			}

         }


  } ?>