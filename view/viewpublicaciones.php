
<?php 
 require_once("../model/db_conn.php");
require_once("../model/imagenes.class.php");
require_once("../model/publicaciones.class.php");

 $id=1;
  $img=Gestion_imagenes::ReadbyId($id);
?>
<div class="bg"> 
   <div style="margin-left: 15%; margin-top:10% ">


        <i style="font-family:'lacite';font-size: 4em; color: white;">"<?php echo $img["frase_publicaciones"]; ?>"</i>
        <br>
        <i style="font-family:'lacite';font-size: 2em; color: white;">-<?php echo $img["autor_publicaciones"]; ?></i>
        

    </div>
    <hr>
    <div style="margin-left: 15%">
      <form accept-charset="utf-8" method="POST" action="viewpublicaciones.php">
       <div class="col-xs-4"> 
         <select name="select" class="form-control" data-toggle="tooltip"  title="Filtrar" id="filtropublicacion" required >
            <option value="x" disabled selected>Seleccione Filtro</option>
             <option value="relatos">Relatos</option>
             <option value="informacion cientifica">Informacion Cienifica</option>
             <option value="habla el experto">Habla El experto</option>
             <option value="mitos y verdades">Mitos y verdades</option>
              
          </select>
          </div> 
      <div class="col-xs-4">    
      <input  class="form-control"  type="text" name="busquedapu" id="busquedapu" value="" data-toggle="tooltip"  title="buscar" placeholder="Buscar" required maxlength="30" autocomplete="off" onKeyup="buscarpu();" />
      </div>
       </form>
    </div>
    
</div>



<style type="text/css">

.bg {
  padding: 0px;
  margin-bottom: 0px;
  color: inherit;
   width: 100%;
  height: 500px; 
  background: url('<?php echo $img["img_publicaciones"] ?>') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-top: 100px;
  padding-bottom: 100px;
}
</style>
<div class="container">
<div id="publicaciones"></div>
</div>

<div id="works">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center" style="margin-top:-100px !important;">
      <h2>PUBLICACIONES</h2>
      <hr>
      <div class="clearfix"></div>
      <p>En esta seccion podras encontrar diferentes articulos; con el objetivo que estes informado y preparado para cualquier momento.</p>
      <hr>
      <div class="row">
     
      </div>
    </div>
    
    <div class="row" style="margin-top:2%">
      <div  class="portfolio-items">

       <?php



       $publicaciones= Gestion_Publicaciones::ReadAll();

       foreach ($publicaciones as $row) {



       
       echo "<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='#' onclick=openmodal('detalle_publicacion','".$row['id_publicacion']."') &quot;>
              <div class='hover-text'>
                <h4>".$row["titulo"]."</h4>
                <p>Autor: ".$row["autor"]."</p>
                 <p>Tematica:".$row["tipo_publicacion"]."</p>
              </div>
              <img src='".$row["url_archivo"]."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>"; ?>
          
 <a  href='#' onclick="openmodal('detalle_publicacion','<?php echo $row["id_publicacion"] ?>')"  class="btn guardar"><h4>Ver Contenido</h4></a>
        </div>
        <?php }  

          

      ?>
        
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
    $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
});

function buscarpu() {
    var textoBusqueda = $("input#busquedapu").val();
 
     if (textoBusqueda != "") {
        $.post("filtropublicacion.php", {elegido: textoBusqueda}, function(mensaje) {
            $("#publicaciones").html(mensaje);
         }); 
     } else { 
        $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
        };
};
</script>