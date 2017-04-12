
 <?php
  

  require_once("../model/db_conn.php");
  require_once("../model/publicaciones.class.php");
  require_once("../model/productos.class.php");

 
  $pub=Gestion_Publicaciones::ReadbyId($ui);

?>
 <div  class="modal-dialog modal-lg" width="410" >  
 
<div class="form-style-6">
  
<h3 ><?php echo strtoupper($pub["tipo_publicacion"])?></h3>


  <div class="dp"> 
   <div style="margin-left: 15%; margin-top:10% ">


        <i style="font-family:'lacite';font-size: 4em; color: white;">"<?php echo $pub["titulo"]; ?>"</i>
        <br>
        <i style="font-family:'lacite';font-size: 2em; color: white;">-<?php echo $pub["autor"]; ?></i>
        

    </div>
    
    
</div>



<style type="text/css">

.dp {
  padding: 0px;
  margin-bottom: 0px;
  color: inherit;
   width: 100%;
  height: 500px; 
  background: url('<?php echo $pub["url_archivo"] ?>') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-top: 100px;
  padding-bottom: 100px;
}
</style>
  <div class="about">
  <div class="row">
  <div class="col-md-4">
  <h4><?php echo $pub["titulo"] ?></h4>
  <p><?php echo $pub["texto"] ?></p>
  </div>
  </div>
  <hr>
  <div class="row" style="margin-left: 30%">
  <h4>PRODUCTO RECOMENDADO</h4>
  <?php
  $id_producto=$pub["id_producto"] ;
  $prod=Gestion_Productos::ReadbyId($id_producto);

  echo "<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='index.php?p=". base64_encode('comprar')."&ui=".base64_encode($prod['id_producto'])."'>
              <div class='hover-text'>
                <h4>".$prod['nombre']."</h4>
                <p>Costo: $".$prod['valor_venta']."</p>
                 <p>Descuento:".$prod['descuento']."%</p>
              </div>
              <img src='".$prod['url_foto1']."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
          <a href='../controller/comprar.php?ui=".base64_encode($prod['id_producto'])."' class= 'btn guardar'><h4>Comprar</h4></a>
          <a  href='#' onclick=openmodal('detalle_producto','".$prod['id_producto']."') &quot;  class='btn cancelar'><h4>Ver Detalle</h4></a>
          
 
        </div>";
  ?>
</div>
</div>

          
</div>
</div>