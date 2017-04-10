<?php
 require_once("../model/db_conn.php");
 require_once("../model/publicaciones.class.php");

$options="";
if ($_POST["elegido"]=="relatos") {
  $tipo_publicacion="relatos";

  $pub= Gestion_Publicaciones::Readbytipo($tipo_publicacion);
  
  if (count($pub)==0) {
    echo "<h2> NO SE ENCONTRARON RESULTADOS DE LA BUSQUEDA </h2>";
  }else{ echo "<h4>PUBLICACIONES DE TEMATICA RELATOS</h4>";
       foreach ($pub as $row) {



       
       print_r("<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='#' onclick=openmodal('detalle_publicacion','".$row['id_publicacion']."') &quot;>
              <div class='hover-text'>
                <h4>".$row['titulo']."</h4>
                <p>autor: ".$row['autor']."</p>
                 <p>Tematica:".$row['tipo_publicacion']."</p>
              </div>
              <img src='".$row['url_archivo']."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
          <a href='#' onclick=openmodal('detalle_publicacion','".$row['id_publicacion']."') &quot; class= 'btn guardar'><h4>Ver Contenido</h4></a>
          
          
 
        </div>");
         } } 

          
    
}
elseif ($_POST["elegido"]=="informacion cientifica") {
   $tipo_publicacion="informacion cientifica";

  $pub= Gestion_Publicaciones::Readbytipo($tipo_publicacion);
  
  if (count($pub)==0) {
    echo "<h2> NO SE ENCONTRARON RESULTADOS DE LA BUSQUEDA </h2>";
  }else{echo "<h4>PUBLICACIONES DE TIPO INFORMACION CIENTIFICA </h4>";

       foreach ($pub as $row) {


        print_r("<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='#' onclick=openmodal('detalle_publicacion','".$row['id_publicacion']."') &quot;>
              <div class='hover-text'>
                <h4>".$row['titulo']."</h4>
                <p>autor: ".$row['autor']."</p>
                 <p>Tematica:".$row['tipo_publicacion']."</p>
              </div>
              <img src='".$row['url_archivo']."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
          <a href='#' onclick=openmodal('detalle_publicacion','".$row['id_publicacion']."') &quot; class= 'btn guardar'><h4>Ver Contenido</h4></a>
          
          
 
        </div>");
         }  }
 
}
elseif ($_POST["elegido"]=="habla el experto") {
    $tipo_publicacion="habla el experto";

  $pub= Gestion_Publicaciones::Readbytipo($tipo_publicacion);

  
  if (count($pub)==0) {
    echo "<h2> NO SE ENCONTRARON RESULTADOS DE LA BUSQUEDA </h2>";
  }else{echo "<h4>PUBLICACIONES DE ALGUNOS EXPERTOS EN SEXO</h4>";
       foreach ($pub as $row) {



       print_r("<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='#' onclick=openmodal('detalle_publicacion','".$row['id_publicacion']."') &quot;>
              <div class='hover-text'>
                <h4>".$row['titulo']."</h4>
                <p>autor: ".$row['autor']."</p>
                 <p>Tematica:".$row['tipo_publicacion']."</p>
              </div>
              <img src='".$row['url_archivo']."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
          <a href='#' onclick=openmodal('detalle_publicacion','".$row['id_publicacion']."') &quot; class= 'btn guardar'><h4>Ver Contenido</h4></a>
          
          
 
        </div>");
         } } 
   
}
elseif ($_POST["elegido"]=="mitos y verdades") {
   $tipo_publicacion="mitos y verdades";

  $pub= Gestion_Publicaciones::Readbytipo($tipo_publicacion);
  
  if (count($pub)==0) {
    echo "<h2> NO SE ENCONTRARON RESULTADOS DE LA BUSQUEDA </h2>";
  }else{echo "<h4>PUBLICACIONES  SOBRE MITOS Y VERDADES</h4>";
       foreach ($pub as $row) {



       print_r("<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='#' onclick=openmodal('detalle_publicacion','".$row['id_publicacion']."') &quot;>
              <div class='hover-text'>
                <h4>".$row['titulo']."</h4>
                <p>autor: ".$row['autor']."</p>
                 <p>Tematica:".$row['tipo_publicacion']."</p>
              </div>
              <img src='".$row['url_archivo']."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
          <a href='#' onclick=openmodal('detalle_publicacion','".$row['id_publicacion']."') &quot; class= 'btn guardar'><h4>Ver Contenido</h4></a>
          
          
 
        </div>");
         }  }
  
}else{

   $var=$_POST["elegido"];
   $like="%".$var."%";


  
  
  $pub= Gestion_Publicaciones::Readbylike($like);
  if (count($pub)==0) {
    echo "<h2> NO SE ENCONTRARON RESULTADOS DE LA BUSQUEDA </h2>";
  }else{echo "<h4>RESULTADOS DE SU BUSQUEDA... </h4>";
       foreach ($pub as $row) {



       print_r("<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='#' onclick=openmodal('detalle_publicacion','".$row['id_publicacion']."') &quot;>
              <div class='hover-text'>
                <h4>".$row['titulo']."</h4>
                <p>autor: ".$row['autor']."</p>
                 <p>Tematica:".$row['tipo_publicacion']."</p>
              </div>
              <img src='".$row['url_archivo']."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
          <a href='#' onclick=openmodal('detalle_publicacion','".$row['id_publicacion']."') &quot; class= 'btn guardar'><h4>Ver Contenido</h4></a>
          
          
 
        </div>");
         }}
}

   
?>