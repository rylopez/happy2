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
            <source src="../../../video/video.mp4" type="video/mp4" />Tu navegador  no soporta este video</video>
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
      <div class="col-xs-10 col-sm-8 col-md-4 col-lg-4" style="margin-left:38%;margin-right: 38%;"><a  href="index.php?p=<?php echo base64_encode('viewproducto')?>" class="btn guardar"><h4>Mas productos</h4></a>
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
            <div class='hover-bg'>"?> <a href='#' onclick="openmodal('detalle_producto','<?php echo $row["id_producto"] ?>')">
            <?php Echo "
              <div class='hover-text'>
                <h4>".$row["nombre"]."</h4>
                <p> Valor:$".$row["valor_venta"]."</p>
                <p>Descuento:".$row["descuento"]."%</p>
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
<?php 
 require_once("../model/db_conn.php");
require_once("../model/imagenes.class.php");

 $id=1;
  $img=Gestion_imagenes::ReadbyId($id);
?>
<div class="bg">
   <div style="margin-left: 15%">
        <i style="font-family:'lacite';font-size: 4em; color: white;">"<?php echo $img["frase_index_1"]; ?>"</i>
        <br>
        <i style="font-family:'lacite';font-size: 2em; color: white;">-<?php echo $img["autor_index_1"]; ?></i>
        <br>
    </div>
</div>



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
      <p>Podras ver algunos articulos  que te ayudaran a instruirte. El objetivo  de estos   es romper  el paradigma  de asociar que la sexualidad es vulgar.Asi mismo podras tener  una idea mas clara, de como  complacer a  tu pareja.  Animate rompe los prejuicios y  busca siempre tu felicidad   con la  ayuda de tu tienda virtual  favorita.</p>
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

<div class="bg2">
   <div style="margin-left: 15%">
        <i style="font-family:'lacite';font-size: 4em; color: white;">"<?php echo $img["frase_index_2"]; ?>"</i>
        <br>
        <i style="font-family:'lacite';font-size: 2em; color: white;">-<?php echo $img["autor_index_2"]; ?></i>
        <br>
    </div>
</div>



<style type="text/css">

.bg2 {
  padding: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  margin-right: 0px;
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
      <div class="col-md-4"><img src="recursos/logos/logo.png" class="img-responsive"></div>
      <div class="col-md-4">
        <div class="about-text">
          <h4>Quienes somos</h4>
          <p>Somos una tienda virtual de productos eroticos, destacando la sensualidad que debe de ir  de la  mano  del amor y de alegria. La sexualidad es parte  de  nuestra vida  cotidiana  y es un aspecto  tan importante  en los seres  humanos que  buscamos  no  solo vender un producto  sino tambien  contribuir a  que las personas se sientan mas seguras y felices en este aspecto.</p>
          <p> </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="about-text">
          <h4>Qué Hacemos</h4>
          <p>Ayudamos  a  romper los prejuicios sociales establecidos  al hablar de sexo, buscamos que las personas  cada dia hablen con mayor naturalidad del tema y que mejor manera de hacerlo con argumentos, por  ello en nuestro sitio web encontraras.</p>
          <ul>
            <li>Consejos de expertos</li>
            <li>Consejos de personas comunes, que solo comparten experiencias</li>
            <li>Productos de los cuales estamos seguros; te haran mas feliz</li>
            <li>Informacion cientifica  referente al tema</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>