<?php 
 require_once("../model/db_conn.php");
require_once("../model/imagenes.class.php");
require_once("../model/productos.class.php");

 $id=1;
  $img=Gestion_imagenes::ReadbyId($id);
?>
<div class="bg">
   <div style="margin-left: 15%">
        <i style="font-family:'lacite';font-size: 4em; color: white;">"<?php echo $img["frase_productos"]; ?>"</i>
        <br>
        <i style="font-family:'lacite';font-size: 2em; color: white;">-<?php echo $img["autor_productos"]; ?></i>
        <br>
    </div>
</div>
<hr>



<style type="text/css">

.bg {
  padding: 0px;
  margin-bottom: 0px;
  color: inherit;
   width: 100%;
  height: 500px; 
  background: url('<?php echo $img["img_productos"] ?>') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-top: 100px;
  padding-bottom: 100px;
}
</style>
<div id="works">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>PRODUCTOS</h2>
      <hr>
      <div class="clearfix"></div>
      <p>Puedes encontrar lo que estas  buscando, para ver informacion mas detallada solo da  clic en ver detalle</p>
      <hr>
      <div class="row">
     
      </div>
    </div>
    
    <div class="row" style="margin-top:2%">
      <div class="portfolio-items">
       <?php



       $productos= Gestion_Productos::ReadAll();

       foreach ($productos as $row) {



       
       echo "<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='index.php?p=". base64_encode("comprar")."&ui=".base64_encode($row["id_producto"])."'>
              <div class='hover-text'>
                <h4>".$row["nombre"]."</h4>
                <p>Costo: $".$row["valor_venta"]."</p>
                 <p>Descuento:".$row["descuento"]."%</p>
              </div>
              <img src='".$row["url_foto1"]."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>"; ?>
          <a  href="index.php?p=<?php echo base64_encode("comprar")?>&ui=<?php echo base64_encode($row["id_producto"]) ?>" class="btn guardar"><h4>Comprar</h4></a>
 <a  href='#' onclick="openmodal('detalle_producto','<?php echo $row["id_producto"] ?>')"  class="btn cancelar"><h4>Ver Detalle</h4></a>
        </div>
        <?php }  

          

      ?>
        
      </div>
    </div>
  </div>
</div>

