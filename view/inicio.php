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
      <h2>Our Portfolio</h2>
      <hr>
      <div class="clearfix"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".lorem">Web Design</a></li>
            <li><a href="#" data-filter=".consectetur">Web Development</a></li>
            <li><a href="#" data-filter=".dapibus">Branding</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="../Nuevacarpeta/img/portfolio/01.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Web Design</p>
              </div>
              <img src="../Nuevacarpeta/img/portfolio/01.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 consectetur">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="../Nuevacarpeta/img/portfolio/02.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Web Development</p>
              </div>
              <img src="../Nuevacarpeta/img/portfolio/02.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="../Nuevacarpeta/img/portfolio/03.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Web Design</p>
              </div>
              <img src="../Nuevacarpeta/img/portfolio/03.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="../Nuevacarpeta/img/portfolio/04.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Web Design</p>
              </div>
              <img src="../Nuevacarpeta/img/portfolio/04.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 consectetur">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="../Nuevacarpeta/img/portfolio/05.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Web Development</p>
              </div>
              <img src="../Nuevacarpeta/img/portfolio/05.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 dapibus">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="../Nuevacarpeta/img/portfolio/06.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Branding</p>
              </div>
              <img src="../Nuevacarpeta/img/portfolio/06.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 dapibus consectetur">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="../Nuevacarpeta/img/portfolio/07.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Web Development, Branding</p>
              </div>
              <img src="../Nuevacarpeta/img/portfolio/07.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="../Nuevacarpeta/img/portfolio/08.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <p>Web Design</p>
              </div>
              <img src="../Nuevacarpeta/img/portfolio/08.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
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