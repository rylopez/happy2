<div class="homepage-hero-module">
    <div class="video-container">
        <div class="title-container">
            <div class="headline">
                	<h1><img class="img-responsive" src="recursos/logos/logo.png" width="35%" style="margin-left: 30%"></h1>

            </div>
            <div class="description">
                <div class="inner">
                  <i style="font-family:'lacite';font-size: 3em">Tu cuerpo es el infierno en donde quiero arder</i>
                  <br>
                  <i style="font-family:'lacite';font-size: 1em">-Dans Vega</i>
                  <br>

                  <?php    
        if(!isset($_SESSION["id_usuario"])){ ?>
          <a  href="#" onclick="openmodal('logueo','0')" class="btn guardar"><h4>Iniciar sesión</h4></a>
                  <a  href="#" onclick="openmodal('nuevo_usuario','0')"  class="btn cancelar"><h4>Registrate</h4></a>
            <?php }else{ ?>
          <a  href="#" onclick="openmodal('logueo','0')" class="btn guardar"><h4>Comprar</h4></a>
                  <a  href="#" onclick="openmodal('nuevo_usuario','0')"  class="btn guardar"><h4>Educarme</h4></a>
        <?php }    ?>

                 
                </div>
            </div>
        </div>
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
            <source src="../../../video/video.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.</video>
        <div class="poster hidden">
            <img src="recursos/video/poster.jpg" alt="">
        </div>
    </div>
</div>
<!-- Portfolio Section -->
<div id="works">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>PRODUCTOS DESTACADOS</h2>
      <hr>
      <div class="clearfix"></div>
      <p>Estos son algunos de nuestros productos destacados, que te  brindaran satisfaccion y alegria Sexual</p>
      <hr>
      <div class="row">
      <div class="col-xs-10 col-sm-8 col-md-4 col-lg-4" style="margin-left:38%;margin-right: 38%;"><a  href="#" onclick="openmodal('logueo','0')" class="btn guardar" ><h4>Mas productos</h4></a>
      </div>
      </div>
    </div>
    
    <div class="row" style="margin-top:2%">
      <div class="portfolio-items">
       <?php


       require_once("../model/db_conn.php");
       require_once("../model/productos.class.php");

       $productos= Gestion_Productos::readrand();

       foreach ($productos as $row) {



       
       echo "<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='comprarproducto.php'>
              <div class='hover-text'>
                <h4>".$row["nombre"]."</h4>
                <p>$".$row["valor_venta"]."</p>
              </div>
              <img src='".$row["url_foto1"]."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
        </div>"; 
        }  

          

      ?>
        
      </div>
    </div>
  </div>
</div>
<div class="container">
<div class="bg">
   <div style="margin-left: 10%">
        <i style="font-family:'lacite';font-size: 6em; color: white;">"Quiero  que  quemes mi  piel,  con el calor de  tú piel"</i>
        <br>
        <i style="font-family:'lacite';font-size: 3em; color: white;">Algun Enamorado</i>
        <br>
    </div>
</div>

</div>
<?php 
 require_once("../model/db_conn.php");
require_once("../model/imagenes.class.php");

 $id=1;
  $img=Gestion_imagenes::ReadbyId($id);
?>
<style type="text/css">

.bg {
  padding: 0px;
  margin-bottom: 0px;
  color: inherit;
   width: 100%;
  height: 450px; 
  background: url('<?php echo $img["img_index_1"] ?>') no-repeat center center fixed; 
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
      <h2>PUBLICACIONES DESTACADAS</h2>
      <hr>
      <div class="clearfix"></div>
      <p>Podras ver algunos articulos  que te ayudaran a instruirte. El objetivo  de estos   es romper  el paradigma  de asociar que la sexualidad es vulgar. El objetivo es que encuentres la manera de  sentir y  disfrutar  mas.</p>
      <hr>
      <div class="row">
      <div class="col-xs-10 col-sm-8 col-md-4 col-lg-4" style="margin-left:38%;margin-right: 35%;"><a  href="#" onclick="openmodal('logueo','0')" class="btn guardar" ><h4>Mas publicaciones</h4></a>
      </div>
      </div>
    </div>
    
    <div class="row" style="margin-top:2%">
      <div class="portfolio-items">
       <?php


       require_once("../model/db_conn.php");
       require_once("../model/publicaciones.class.php");

       $publicacion= Gestion_Publicaciones::readrand();

       foreach ($publicacion as $row) {



       
       echo "<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='comprarproducto.php'>
              <div class='hover-text'>
                <h4>".$row["titulo"]."</h4>
                
              </div>
              <img src='".$row["url_archivo"]."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
        </div>"; 
        }  

          

      ?>
        
      </div>
    </div>
  </div>
</div>
<div class="container">
<div class="bg2">
   <div style="margin-left: 10%">
        <i style="font-family:'lacite';font-size: 6em; color: white;">"Quiero  que  quemes mi  piel,  con el calor de  tú piel"</i>
        <br>
        <i style="font-family:'lacite';font-size: 3em; color: white;">Algun Enamorado</i>
        <br>
    </div>
</div>

</div>

<style type="text/css">

.bg2 {
  padding: 0px;
  margin-bottom: 0px;
  color: inherit;
   width: 100%;
  height: 450px; 
  background: url('<?php echo $img["img_index_2"] ?>') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-top: 100px;
  padding-bottom: 100px;
}
</style>
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Sobre Nosotros</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-4"><img src="img/about.jpg" class="img-responsive"></div>
      <div class="col-md-4">
        <div class="about-text">
          <h4>Who We Are</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum. </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="about-text">
          <h4>What We Do</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam.</p>
          <ul>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing commodo</li>
            <li>Duis sed dapibus leo sed dapibus</li>
            <li>Sed commodo nibh ante bibendum</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>