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
    <hr>