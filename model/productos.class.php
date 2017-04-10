<?php
class Gestion_Productos{

   function veref_exist($referencia)
    {
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        //crear  el  query  que vamos a realizar.
        $consulta= "SELECT * FROM producto WHERE referencia=?  ";
        $query=$conexion->prepare($consulta);
        $query->execute(array($referencia));
        
        $resultado=$query->fetch(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
    }
    function Create($referencia,$nombre,$valor_compra,$valor_venta,$descuento,$iva,$descripcion,$url_foto1,$url_foto2,$url_foto3,$id_tipoproducto,$cantidad,$sexo,$talla,$autor){
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //CAPTURAMOS LA  FECHA DEL SISTEMA
        $fecha_creacion=date("Y-m-d");
        
        
        //crear  el  quiery  que vamos a realizar.
        $consulta= "INSERT INTO producto (referencia,nombre,valor_compra,valor_venta,descuento,iva,descripcion,url_foto1,url_foto2,url_foto3,id_tipoproducto,cantidad,sexo,talla,autor,fecha_creacion) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $query=$conexion->prepare($consulta);
        $query->execute(array($referencia,$nombre,$valor_compra,$valor_venta,$descuento,$iva,$descripcion,$url_foto1,$url_foto2,$url_foto3,$id_tipoproducto,$cantidad,$sexo,$talla,$autor,$fecha_creacion));


	
        happy_BD::Disconnect();
    }



	
    function Readbyid($id_producto)
    {
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        //crear  el  query  que vamos a realizar.
        $consulta= "SELECT * FROM producto WHERE id_producto=? ";
        $query=$conexion->prepare($consulta);
        $query->execute(array($id_producto));
        
        $resultado=$query->fetch(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
    }
     function Readbytipo($id_tipoproducto)
    {
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        //crear  el  query  que vamos a realizar.
        $consulta= "SELECT * FROM producto WHERE id_tipoproducto=? AND cantidad >0 ";
        $query=$conexion->prepare($consulta);
        $query->execute(array($id_tipoproducto));
        
        $resultado=$query->fetchALL(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
    }
    function Readbysexo($sexo)
    {
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        //crear  el  query  que vamos a realizar.
        $consulta= "SELECT * FROM producto WHERE sexo=? AND cantidad >0 ";
        $query=$conexion->prepare($consulta);
        $query->execute(array($sexo));
        
        $resultado=$query->fetchALL(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
    }
    function Readbylike($like)
    {
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        //crear  el  query  que vamos a realizar.
        $consulta= "SELECT * FROM producto WHERE sexo like ? OR nombre like ?  OR referencia like ? AND cantidad >0 ";
        $query=$conexion->prepare($consulta);
        $query->execute(array($like,$like,$like));
        
        $resultado=$query->fetchALL(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
    }



 	function ReadReference($referencia){
 		$conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 		$consulta= "DELETE FROM contactos WHERE id=?";

 		$query =$conexion-> prepare($consulta);
        $query->$execute(array($id));
        happy_BD::Disconnect();
    }


    function Update($referencia,$nombre,$valor_compra,$valor_venta,$iva,$descuento,$cantidad,$id_tipoproducto,$talla,$sexo,$descripcion,$autor,$id_producto){
    	$conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $fecha_creacion=date("Y-m-d");

        $consulta= "UPDATE producto SET referencia=?,nombre=?,valor_compra=?,valor_venta=?, iva=?, descuento=?,cantidad=?,id_tipoproducto=?,talla=?,sexo=?,descripcion=?, fecha_creacion=?,autor=? WHERE id_producto=?";
        $query=$conexion->prepare($consulta);
        $query->execute(array($referencia,$nombre,$valor_compra,$valor_venta,$iva,$descuento,$cantidad,$id_tipoproducto,$talla,$sexo,$descripcion,$fecha_creacion,$autor,$id_producto));

        happy_BD::Disconnect();
    }
  function updatefoto($url_foto1,$url_foto2,$url_foto3,$autor,$id_producto){
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $fecha_creacion=date("Y-m-d");

        $consulta= "UPDATE producto SET url_foto1=?,url_foto2=?,url_foto3=?, fecha_creacion=?,autor=? WHERE id_producto=?";
        $query=$conexion->prepare($consulta);
        $query->execute(array($url_foto1,$url_foto2,$url_foto3,$fecha_creacion,$autor,$id_producto));

        happy_BD::Disconnect();
    }


    function delete($id){
    	$conexion = happy_BD:: connect();
    	$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    	$consulta= "DELETE FROM contacto WHERE id= ?";

    	$query =$conexion-> prepare($consulta);
        $query->$execute(array($id));
       
        happy_BD::Disconnect();

    }
    function ReadAll()
    {
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        //crear  el  query  que vamos a realizar.
        $consulta= "SELECT * FROM producto ORDER BY nombre";
        $query=$conexion->prepare($consulta);
        $query->execute();
        // devolmemos el resultado en un arreglo
        //Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
        //para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
        $resultado=$query->fetchALL(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
    }
     function Readcantidad()
    {
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        //crear  el  query  que vamos a realizar.
        $consulta= "SELECT * FROM producto where cantidad >0 ORDER BY nombre";
        $query=$conexion->prepare($consulta);
        $query->execute();
        // devolmemos el resultado en un arreglo
        //Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
        //para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
        $resultado=$query->fetchALL(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
    }
    


     function readrand()
    {
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        //crear  el  query  que vamos a realizar.
        $consulta= "SELECT * FROM producto where cantidad >0 ORDER BY RAND() LIMIT 9";
        $query=$conexion->prepare($consulta);
        $query->execute();
        // devolmemos el resultado en un arreglo
        //Fetch:Es  el  resultado que arroja la   consultta   en forma   de vector   o matris  segun sea el caso
        //para  consultas donde arroja mas de un dato    el  fetch  debe  ir  acompañado   con la  palabra ALL
        $resultado=$query->fetchALL(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
    }



    


	}



?>
