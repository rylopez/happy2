 <?php

 require_once("../model/db_conn.php");
 require_once("../model/imagenes.class.php");
  $ui=1;
  $imagenes=Gestion_Imagenes::ReadbyId($ui);

  $accion = $_REQUEST["acc"];
   switch ($accion) {
  case 'index1':
  $frase= $_POST["frase"];
  $autor=$_POST["autor"];   
        

  if ($_FILES["file"]["error"] > 0)  {
    $tipomsn = base64_encode("warning"); 
  $msn= base64_encode("lo sentimos ha ocurrido un Error :(");
  header("location: ../view/dashboard.php?m=".$msn."&tm=".$tipomsn);
} else {
  //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
  //y que el tamano del archivo no exceda los 100kb
  $permitidos = array("image/jpg", "image/jpeg", "image/png");
  $limite_kb =50000;

  if (in_array($_FILES['file']['type'], $permitidos) && $_FILES['file']['size'] <= $limite_kb * 1024){
    //esta es la ruta donde copiaremos la imagen
    //recuerden que deben crear un directorio con este mismo nombre
    //en el mismo lugar donde se encuentra el archivo subir.php
     unlink($imagenes[1]);
     
      if (file_exists("../view/recursos/imagenes/img_index_1")) {
      $tipomsn = base64_encode("warning"); 
       $msn= base64_encode("lo sentimos estos archivos se encuentran repetidos :(");
       header("location: ../view/dashboard.php?m=".$msn."&tm=".$tipomsn); 
            
         } else {
         if ($_FILES['file']['type'] =="image/jpg" ) {
             $formato=".jpg";
          } elseif (($_FILES['file']['type'] =="image/jpeg" )) {
            $formato=".jpeg";
          }else{
            $formato=".png";
          }

         $url_archivo="../view/recursos/imagenes/img_index_1".$formato;
     

 
          $resultado=@move_uploaded_file($_FILES["file"]["tmp_name"], 
          $url_archivo);
          
    
    //comprobamos si este archivo existe para no volverlo a copiar.
    //pero si quieren pueden obviar esto si no es necesario.
    //o pueden darle otro nombre para que no sobreescriba el actual.
    //aqui movemos el archivo desde la ruta temporal a nuestra ruta
      //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
      //almacenara true o false
       
      try {
  Gestion_Imagenes::updateindex1($url_archivo,$frase,$autor,$ui);
        $tipomsn = base64_encode("success"); 
        $msn= base64_encode("el archivo de la publicacion, se actualizo exitosamente :D");
        
        
      } catch (Exception $e) {
        $tipomsn = base64_encode("warning"); 
        $msn=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
      }
      header("location: ../view/dashboard.php?p=".base64_encode('')."&m=".$msn."&tm=".$tipomsn);
    
    
    }
    }else {
      $tipomsn = base64_encode("warning"); 
    $msn= base64_encode("archivos no permitidos, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes ");
    header("location: ../view/dashboard.php?p=".base64_encode('')."&m=".$msn."&tm=".$tipomsn);
    
  }
}   


break;
case 'index2':

 $frase= $_POST["frase"];
$autor=$_POST["autor"];   
           
        

  if ($_FILES["file"]["error"] > 0)  {
    $tipomsn = base64_encode("warning"); 
  $msn= base64_encode("lo sentimos ha ocurrido un Error :(");
  header("location: ../view/dashboard.php?m=".$msn."&tm=".$tipomsn);
} else {
  //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
  //y que el tamano del archivo no exceda los 100kb
  $permitidos = array("image/jpg", "image/jpeg", "image/png");
  $limite_kb = 50000;

  if (in_array($_FILES['file']['type'], $permitidos) && $_FILES['file']['size'] <= $limite_kb * 1024){
    //esta es la ruta donde copiaremos la imagen
    //recuerden que deben crear un directorio con este mismo nombre
    //en el mismo lugar donde se encuentra el archivo subir.php
     unlink($imagenes[2]);
     
      if (file_exists("../view/recursos/imagenes/img_index_2")) {
      $tipomsn = base64_encode("warning"); 
       $msn= base64_encode("lo sentimos estos archivos se encuentran repetidos :(");
       header("location: ../view/dashboard.php?m=".$msn."&tm=".$tipomsn); 
            
         } else {
         if ($_FILES['file']['type'] =="image/jpg" ) {
             $formato=".jpg";
          } elseif (($_FILES['file']['type'] =="image/jpeg" )) {
            $formato=".jpeg";
          }else{
            $formato=".png";
          }

         $url_archivo="../view/recursos/imagenes/img_index_2".$formato;
     

 
          $resultado=@move_uploaded_file($_FILES["file"]["tmp_name"], 
          $url_archivo);
          
    
    //comprobamos si este archivo existe para no volverlo a copiar.
    //pero si quieren pueden obviar esto si no es necesario.
    //o pueden darle otro nombre para que no sobreescriba el actual.
    //aqui movemos el archivo desde la ruta temporal a nuestra ruta
      //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
      //almacenara true o false
       
      try {
  Gestion_Imagenes::updateindex2($url_archivo,$frase,$autor,$ui);
        $tipomsn = base64_encode("success"); 
        $msn= base64_encode("el archivo de la publicacion, se actualizo exitosamente :D");
        
        
      } catch (Exception $e) {
        $tipomsn = base64_encode("warning"); 
        $msn=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
      }
      header("location: ../view/dashboard.php?p=".base64_encode('')."&m=".$msn."&tm=".$tipomsn);
    
    
    }
    }else {
      $tipomsn = base64_encode("warning"); 
    $msn= base64_encode("archivos no permitidos, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes ");
    header("location: ../view/dashboard.php?p=".base64_encode('')."&m=".$msn."&tm=".$tipomsn);
    
  }
}   


break;
case 'producto':
 $frase= $_POST["frase"];
  $autor=$_POST["autor"];   
            
        

  if ($_FILES["file"]["error"] > 0)  {
    $tipomsn = base64_encode("warning"); 
  $msn= base64_encode("lo sentimos ha ocurrido un Error :(");
  header("location: ../view/dashboard.php?m=".$msn."&tm=".$tipomsn);
} else {
  //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
  //y que el tamano del archivo no exceda los 100kb
  $permitidos = array("image/jpg", "image/jpeg", "image/png");
  $limite_kb = 50000;

  if (in_array($_FILES['file']['type'], $permitidos) && $_FILES['file']['size'] <= $limite_kb * 1024){
    //esta es la ruta donde copiaremos la imagen
    //recuerden que deben crear un directorio con este mismo nombre
    //en el mismo lugar donde se encuentra el archivo subir.php
     unlink($imagenes[3]);
     
      if (file_exists("../view/recursos/imagenes/img_productos")) {
      $tipomsn = base64_encode("warning"); 
       $msn= base64_encode("lo sentimos estos archivos se encuentran repetidos :(");
       header("location: ../view/dashboard.php?m=".$msn."&tm=".$tipomsn); 
            
         } else {
         if ($_FILES['file']['type'] =="image/jpg" ) {
             $formato=".jpg";
          } elseif (($_FILES['file']['type'] =="image/jpeg" )) {
            $formato=".jpeg";
          }else{
            $formato=".png";
          }

         $url_archivo="../view/recursos/imagenes/img_productos".$formato;
     

 
          $resultado=@move_uploaded_file($_FILES["file"]["tmp_name"], 
          $url_archivo);
          
    
    //comprobamos si este archivo existe para no volverlo a copiar.
    //pero si quieren pueden obviar esto si no es necesario.
    //o pueden darle otro nombre para que no sobreescriba el actual.
    //aqui movemos el archivo desde la ruta temporal a nuestra ruta
      //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
      //almacenara true o false
       
      try {
  Gestion_Imagenes::updateproductos($url_archivo,$frase,$autor,$ui);
        $tipomsn = base64_encode("success"); 
        $msn= base64_encode("el archivo de la publicacion, se actualizo exitosamente :D");
        
        
      } catch (Exception $e) {
        $tipomsn = base64_encode("warning"); 
        $msn=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
      }
      header("location: ../view/dashboard.php?p=".base64_encode('')."&m=".$msn."&tm=".$tipomsn);
    
    
    }
    }else {
      $tipomsn = base64_encode("warning"); 
    $msn= base64_encode("archivos no permitidos, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes ");
    header("location: ../view/dashboard.php?p=".base64_encode('')."&m=".$msn."&tm=".$tipomsn);
    
  }
}   


break;
case 'compras':

 $frase= $_POST["frase"];
  $autor=$_POST["autor"];   
            
        

  if ($_FILES["file"]["error"] > 0)  {
    $tipomsn = base64_encode("warning"); 
  $msn= base64_encode("lo sentimos ha ocurrido un Error :(");
  header("location: ../view/dashboard.php?m=".$msn."&tm=".$tipomsn);
} else {
  //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
  //y que el tamano del archivo no exceda los 100kb
  $permitidos = array("image/jpg", "image/jpeg", "image/png");
  $limite_kb = 50000;

  if (in_array($_FILES['file']['type'], $permitidos) && $_FILES['file']['size'] <= $limite_kb * 1024){
    //esta es la ruta donde copiaremos la imagen
    //recuerden que deben crear un directorio con este mismo nombre
    //en el mismo lugar donde se encuentra el archivo subir.php
     unlink($imagenes[4]);
     
      if (file_exists("../view/recursos/imagenes/img_compras")) {
      $tipomsn = base64_encode("warning"); 
       $msn= base64_encode("lo sentimos estos archivos se encuentran repetidos :(");
       header("location: ../view/dashboard.php?m=".$msn."&tm=".$tipomsn); 
            
         } else {
         if ($_FILES['file']['type'] =="image/jpg" ) {
             $formato=".jpg";
          } elseif (($_FILES['file']['type'] =="image/jpeg" )) {
            $formato=".jpeg";
          }else{
            $formato=".png";
          }

         $url_archivo="../view/recursos/imagenes/img_compras".$formato;
     

 
          $resultado=@move_uploaded_file($_FILES["file"]["tmp_name"], 
          $url_archivo);
          
    
    //comprobamos si este archivo existe para no volverlo a copiar.
    //pero si quieren pueden obviar esto si no es necesario.
    //o pueden darle otro nombre para que no sobreescriba el actual.
    //aqui movemos el archivo desde la ruta temporal a nuestra ruta
      //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
      //almacenara true o false
       
      try {
  Gestion_Imagenes::updatecompras($url_archivo,$frase,$autor,$ui);
        $tipomsn = base64_encode("success"); 
        $msn= base64_encode("el archivo de la publicacion, se actualizo exitosamente :D");
        
        
      } catch (Exception $e) {
        $tipomsn = base64_encode("warning"); 
        $msn=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
      }
      header("location: ../view/dashboard.php?p=".base64_encode('')."&m=".$msn."&tm=".$tipomsn);
    
    
    }
    }else {
      $tipomsn = base64_encode("warning"); 
    $msn= base64_encode("archivos no permitidos, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes ");
    header("location: ../view/dashboard.php?p=".base64_encode('')."&m=".$msn."&tm=".$tipomsn);
    
  }
}   


break;
case 'publicacion':

 $frase= $_POST["frase"];
  $autor=$_POST["autor"];   
            
        

  if ($_FILES["file"]["error"] > 0)  {
    $tipomsn = base64_encode("warning"); 
  $msn= base64_encode("lo sentimos ha ocurrido un Error :(");
  header("location: ../view/dashboard.php?m=".$msn."&tm=".$tipomsn);
} else {
  //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
  //y que el tamano del archivo no exceda los 100kb
  $permitidos = array("image/jpg", "image/jpeg", "image/png");
  $limite_kb = 50000;

  if (in_array($_FILES['file']['type'], $permitidos) && $_FILES['file']['size'] <= $limite_kb * 1024){
    //esta es la ruta donde copiaremos la imagen
    //recuerden que deben crear un directorio con este mismo nombre
    //en el mismo lugar donde se encuentra el archivo subir.php
     unlink($imagenes[5]);
     
      if (file_exists("../view/recursos/imagenes/img_publicaciones")) {
      $tipomsn = base64_encode("warning"); 
       $msn= base64_encode("lo sentimos estos archivos se encuentran repetidos :(");
       header("location: ../view/dashboard.php?m=".$msn."&tm=".$tipomsn); 
            
         } else {
         if ($_FILES['file']['type'] =="image/jpg" ) {
             $formato=".jpg";
          } elseif (($_FILES['file']['type'] =="image/jpeg" )) {
            $formato=".jpeg";
          }else{
            $formato=".png";
          }

         $url_archivo="../view/recursos/imagenes/img_publicaciones".$formato;
     

 
          $resultado=@move_uploaded_file($_FILES["file"]["tmp_name"], 
          $url_archivo);
          
    
    //comprobamos si este archivo existe para no volverlo a copiar.
    //pero si quieren pueden obviar esto si no es necesario.
    //o pueden darle otro nombre para que no sobreescriba el actual.
    //aqui movemos el archivo desde la ruta temporal a nuestra ruta
      //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
      //almacenara true o false
       
      try {
  Gestion_Imagenes::updatepublicaciones($url_archivo,$frase,$autor,$ui);
        $tipomsn = base64_encode("success"); 
        $msn= base64_encode("el archivo de la publicacion, se actualizo exitosamente :D");
        
        
      } catch (Exception $e) {
        $tipomsn = base64_encode("warning"); 
        $msn=":( ha  ocurrido un error, el error  fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
      }
      header("location: ../view/dashboard.php?p=".base64_encode('')."&m=".$msn."&tm=".$tipomsn);
    
    
    }
    }else {
      $tipomsn = base64_encode("warning"); 
    $msn= base64_encode("archivos no permitidos, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes ");
    header("location: ../view/dashboard.php?p=".base64_encode('')."&m=".$msn."&tm=".$tipomsn);
    
  }
}   


break;
  }
?>