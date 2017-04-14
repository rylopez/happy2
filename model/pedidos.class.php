<?php
class Gestion_pedidos{

 	
    	function veref_pedido($id_usuario)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=happy_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT * FROM pedido WHERE id_usuario=? AND estado=1";
		$query=$conexion->prepare($consulta);
		$query->execute(array($id_usuario));
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetchALL(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
	}
	function validadetalleprod($id_pedido,$id_producto)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=happy_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT * FROM detalle_pedido WHERE id_pedido=? AND id_producto=?";
		$query=$conexion->prepare($consulta);
		$query->execute(array($id_pedido,$id_producto));
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetchALL(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
	}
	function ReadDetalle($id_pedido)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=happy_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT detalle_pedido.id_pedido,detalle_pedido.id_producto,detalle_pedido.cantidad,producto.referencia,producto.nombre,
producto.valor_venta,producto.descuento,producto.iva,
round(detalle_pedido.cantidad*(producto.valor_venta+(producto.valor_venta*producto.iva/100)-(producto.valor_venta*producto.descuento/100)),1) as total_producto

FROM detalle_pedido INNER JOIN producto ON detalle_pedido.id_producto=producto.id_producto WHERE id_pedido= ? ";
		$query=$conexion->prepare($consulta);
		$query->execute(array($id_pedido));
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetchALL(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
	}
	function totalvalorproducto($id_pedido,$id_producto)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=happy_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT detalle_pedido.id_pedido,detalle_pedido.id_producto,detalle_pedido.cantidad,producto.referencia,producto.nombre,
producto.valor_venta,producto.descuento,producto.iva,
round(detalle_pedido.cantidad*(producto.valor_venta+(producto.valor_venta*producto.iva/100)-(producto.valor_venta*producto.descuento/100)),1) as total_producto

FROM detalle_pedido INNER JOIN producto ON detalle_pedido.id_producto=producto.id_producto WHERE id_pedido= ?  and id_producto=?";
		$query=$conexion->prepare($consulta);
		$query->execute(array($id_pedido,$id_producto));
		
		$resultado=$query->fetch(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
	}
		function validaidpedido($id_usuario)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=happy_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT * FROM pedido WHERE id_usuario=? AND estado=1";
		$query=$conexion->prepare($consulta);
		$query->execute(array($id_usuario));
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetch(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
	}
	function totaldetallepedido($id_pedido)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=happy_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT ROUND( sum(detalle_pedido.cantidad*(producto.valor_venta+(producto.valor_venta*producto.iva/100)-(producto.valor_venta*producto.descuento/100))),1)as total FROM detalle_pedido INNER JOIN producto ON detalle_pedido.id_producto=producto.id_producto WHERE id_pedido= ? ";
		$query=$conexion->prepare($consulta);
		$query->execute(array($id_pedido));
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetch(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
	}
	function Updateestado($estado,$id_pedido){
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $consulta= "UPDATE pedido SET estado=? WHERE id_pedido=?";
        $query=$conexion->prepare($consulta);
        $query->execute(array($estado,$id_pedido));

        happy_BD::Disconnect();
    }
	
	
	 function Createpedido($id_usuario,$estado,$total,$forma_pago){
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //CAPTURAMOS LA  FECHA DEL SISTEMA
        $fecha_creacion=date("Y-m-d");
        
        
        //crear  el  quiery  que vamos a realizar.
        $consulta= "INSERT INTO pedido (fecha_pedido,id_usuario,estado,total,forma_pago) values(?,?,?,?,?)";
        $query=$conexion->prepare($consulta);
        $query->execute(array($fecha_creacion,$id_usuario,$estado,$total,$forma_pago));


	
        happy_BD::Disconnect();
    }
    function Createdetallepedido($id_pedido,$id_producto,$cantidad){
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //CAPTURAMOS LA  FECHA DEL SISTEMA
        $fecha_creacion=date("Y-m-d");
        
        
        //crear  el  quiery  que vamos a realizar.
        $consulta= "INSERT INTO detalle_pedido (id_pedido,id_producto,cantidad,fecha_creacion) values(?,?,?,?)";
        $query=$conexion->prepare($consulta);
        $query->execute(array($id_pedido,$id_producto,$cantidad,$fecha_creacion));


	
        happy_BD::Disconnect();
    }
     function updatetotal($total,$id_pedido){

     	 $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $consulta= "UPDATE pedido SET total=?   WHERE id_pedido=?";
        $query=$conexion->prepare($consulta);
        $query->execute(array($total,$id_pedido));

        happy_BD::Disconnect();
    }
     function updatecantidad($cantidad,$id_pedido,$id_producto){

     	 $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $consulta= "UPDATE detalle_pedido SET cantidad=?   WHERE id_pedido=? AND id_producto=?";
        $query=$conexion->prepare($consulta);
        $query->execute(array($cantidad,$id_pedido,$id_producto));

        happy_BD::Disconnect();
    }
     function deletedetalle($id_pedido,$id_producto){

     	 $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $consulta= "DELETE FROM detalle_pedido WHERE id_pedido= ? AND id_producto=?";
        $query=$conexion->prepare($consulta);
        $query->execute(array($id_pedido,$id_producto));

        happy_BD::Disconnect();
    	
    }
    	function ReadAll()
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=happy_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT pedido.id_pedido,pedido.fecha_pedido, usuario.nombre,usuario.apellido,pedido.estado,pedido.total,pedido.forma_pago FROM pedido INNER JOIN usuario ON pedido.id_usuario=usuario.id_usuario ";
		$query=$conexion->prepare($consulta);
		$query->execute();
		// devolmemos el resultado en un arreglo
		//Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
		//para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
		$resultado=$query->fetchALL(PDO::FETCH_BOTH);
		return $resultado;

		happy_BD::Disconnect();
	}
	function Readbypedido($id_pedido)
	{
		//instacioamos y nos conectamos a la  base de  datos
		$conexion=happy_BD::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//crear  el  query  que vamos a realizar.
		$consulta= "SELECT pedido.id_pedido,pedido.fecha_pedido, usuario.nombre,usuario.apellido,pedido.estado,pedido.total,pedido.forma_pago, usuario.direccion,usuario.telefono,usuario.celular,usuario.direccion,usuario.ciudad,usuario.id_usuario,usuario.numero_documento FROM pedido INNER JOIN usuario ON pedido.id_usuario=usuario.id_usuario WHERE id_pedido=? ";
		$query=$conexion->prepare($consulta);
		$query->execute(array($id_pedido));
		
		$resultado=$query->fetch(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
    }
}
?>	