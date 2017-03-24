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
      <div class="col-xs-10 col-sm-8 col-md-4 col-lg-4" style="margin-left:38%;margin-right: 38%;"><a  href="#" onclick="openmodal('logueo','0')" class="btn guardar" ><h4>Ver mas productos</h4></a>
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
<div class="bg"></div>
<div class="jumbotron">
  <h1>Bootstrap Jumbotron</h1>
  <p class="lead">+ Parallax Effect using jQuery</p>
</div>
</div>
<style type="text/css">
  .bg {
  background: url('recursos/imagenes/img_index_1.jpeg') no-repeat center center;
  position: fixed;
  width: 100%;
  height: 350px; /*same height as jumbotron */
  top:0;
  left:0;
  z-index: -1;
}

.jumbotron {
  height: 350px;
  color: white;
  text-shadow: #444 0 1px 1px;
  background:transparent;
}
#main {
  margin-top:0px;
  position:relative;
  background:#fff;
}
</style>
<div class="container-fluid" id="main">
<div class="container" id="content">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Heading</h2>

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a>
            </p>
        </div>
        <div class="col-md-4">
           	<h2>Heading</h2>

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>

            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h2>Heading</h2>

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            <p>
                <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>

            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p>
                <a class="btn btn-default" href="#" role="button">View details &raquo;</a>
            </p>
        </div>
    </div>
    </div>
    <hr>
    </div>