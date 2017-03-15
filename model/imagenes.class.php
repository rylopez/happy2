<?php
class Gestion_imagenes{

 	
    function Readbyid($ui)
    {
        //instacioamos y nos conectamos a la  base de  datos
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        //crear  el  query  que vamos a realizar.
        $consulta= "SELECT * FROM imagenes WHERE id_imagenes=? ";
        $query=$conexion->prepare($consulta);
        $query->execute(array($ui));
        
        $resultado=$query->fetch(PDO::FETCH_BOTH);
        return $resultado;

        happy_BD::Disconnect();
    }



  function updateindex1($url_archivo,$ui){
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $consulta= "UPDATE imagenes SET img_index_1=?  WHERE id_imagenes=?";
        $query=$conexion->prepare($consulta);
        $query->execute(array($url_archivo,$ui));

        happy_BD::Disconnect();
    }
    function updateindex2($url_archivo,$ui){
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $consulta= "UPDATE imagenes SET img_index_2=?  WHERE id_imagenes=?";
        $query=$conexion->prepare($consulta);
        $query->execute(array($url_archivo,$ui));

        happy_BD::Disconnect();
    }
      function updateproductos($url_archivo,$ui){
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $consulta= "UPDATE imagenes SET img_productos=?  WHERE id_imagenes=?";
        $query=$conexion->prepare($consulta);
        $query->execute(array($url_archivo,$ui));

        happy_BD::Disconnect();
    }
      function updatecompras($url_archivo,$ui){
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $consulta= "UPDATE imagenes SET img_compras=?  WHERE id_imagenes=?";
        $query=$conexion->prepare($consulta);
        $query->execute(array($url_archivo,$ui));

        happy_BD::Disconnect();
    }
      function updatepublicaciones($url_archivo,$ui){
        $conexion=happy_BD::Connect();
        $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $consulta= "UPDATE imagenes SET img_publicaciones=?  WHERE id_imagenes=?";
        $query=$conexion->prepare($consulta);
        $query->execute(array($url_archivo,$ui));

        happy_BD::Disconnect();
    }


	}



?>