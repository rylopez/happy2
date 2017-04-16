<?php 
//El codigo comentado se debe  actualizar cuando este  la dasboard lista

//cambio casa 

  session_start();
 
 ?>
<!DOCTYPE html>
<html lang="Es">
<head>
  <title>Happy Sex and Life</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="recursos/css/estilo.css">
  <link rel="stylesheet" type="text/css" href="recursos/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="recursos/plugins/sweetalert/dist/sweetalert.css">
  <link rel="stylesheet" href="recursos/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="recursos/plugins/bootstrap/css/bootstrap.min.css">
  

  <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>



  

  <script src="recursos/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" charset="utf8" src="recursos/plugins/datatable/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="recursos/plugins/sweetalert/dist/sweetalert.min.js"></script>



 <script type="text/javascript">
    $(document).ready( function () {
              $('#datatable').DataTable({  
               "language": {               
               "url": "https://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"       
                }
                });

      
 
  $("#tipoproducto").change(function () {
           $("#tipoproducto option:selected").each(function () {
            elegido=$(this).val();
            $.post("tipoproducto.php", { elegido: elegido }, function(data){
            $("#talla").html(data);
            });            
        });
   });
   $("#filtroproducto").change(function () {
           $("#filtroproducto option:selected").each(function () {
            elegido=$(this).val();
            $.post("filtroproducto.php", { elegido: elegido }, function(data){
            $("#productos").html(data);
            });            
        });
   });
     $("#filtropublicacion").change(function () {
           $("#filtropublicacion option:selected").each(function () {
            elegido=$(this).val();
            $.post("filtropublicacion.php", { elegido: elegido }, function(data){
            $("#publicaciones").html(data);
            });            
        });
   });

  
   <?php

                    if(isset($_GET["m"],$_GET["tm"])){
                  echo "swal({ title: '',   text: '".base64_decode($_GET["m"])."',   type: '".base64_decode($_GET["tm"])."',  imageUrl: 'recursos/logos/logo.png',imageSize: '200x120'});";

                  }
      ?>
     $('[data-toggle="tooltip"]').tooltip(); 
 
    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');
        
    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});
function scaleVideoContainer() {

    var height = $(window).height();
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){
    
    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
        windowHeight = $(window).height(),
        videoWidth,
        videoHeight;
    
    console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width'),
            windowAspectRatio = windowHeight/windowWidth;

        if (videoAspectRatio > windowAspectRatio) {
            videoWidth = windowWidth;
            videoHeight = videoWidth * videoAspectRatio;
            $(this).css({'top' : -(videoHeight - windowHeight) / 2 + 'px', 'margin-left' : 0});
        } else {
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});
        }

        $(this).width(videoWidth).height(videoHeight);

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');
        

    });
}
 function openmodal(pagina,numero){
          $("#myModal").modal('show');
          $.post("abrirmodal.php",{pag:pagina,uid:numero},function(data){
            $("#myModal").html(data);
          });
        };

$( document ).ready(function() {
    
  $('.menu').click(function() {

    $('.overlay').removeClass( "flipOutX hide" );
    $('.overlay').addClass( "animated flipInX show" );


    $('#close').click(function() {

      $('.overlay').removeClass( "flipInX show" );
      $('.overlay').addClass( "animated hide flipOutX " );

    });

  });

});


 </script>



</head>
<body >


<div class="overlay">
  <div>

    <ul style="list-style:none; font-family:'Helvetica';text-transform: uppercase; ">
      <li><a href="index.php?p=<?php echo base64_encode('')?>">
      Inicio</a></li>
      <li><a href="index.php?p=<?php echo base64_encode('viewproductos')?>">Productos </a></li>
      <li><a href="index.php?p=<?php echo base64_encode('viewpublicaciones')?>">Publicaciones</a></li>
      <li><a href="index.php#about">Sobre nosotros</a></li>
      
         <?php
            if(!isset($_SESSION["id_usuario"])){  ?>
            <li><a href="#" onclick="openmodal('logueo','0')"> Iniciar Sesión</a></li>
       <?php }else{
          ?>
          <li><a href="cerrarsesion.php"> Cerrar Sesión</a></li>
      <?php  } ?>
    </ul>
 
  </div>

  <div class="close" id="close">X</div>

</div>





<nav class="navbar navbar-inverse navbar-fixed-top"  style="background: black; z-index: 4;">
  
  
  
<div id="nav" class="container">
                   
  <ul class="nav nav-tabs " role="tablist">
    <li> 
</li>
    <li><a href="#" class='menu' id='version-one' style="font-size: 3em; color: white;" ><i class="fa fa-bars" aria-hidden="true"></i>
</a></li>
    <li><a href="#"><img src="recursos/logos/logo.png" style="width:60px;"></a></li>
    <li class="dropdown">
      <?php
      if(!isset($_SESSION["id_usuario"])){  
            }else{ ?>
    
    <a   data-toggle="dropdown" id="nomusu" > <?php echo "".($_SESSION["nombre"])." ".($_SESSION["apellido"]);?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
    <ul class="dropdown-menu dropdown-menu-right">
      <li><a href="#"onclick="openmodal('actualizar_usuario','<?php echo $_SESSION["id_usuario"]; ?>')" >Actualizar mi perfil</a></li>
       <li><a href="index.php?p=<?php echo base64_encode("historialpedido")?>" >Ver historial de Pedidos</a></li>
      <li class="divider"></li>
      <li><a href="cerrarsesion.php">Cerrar Sesión</a></li>      
    </ul>
      <?php } ?>
     </li>
    <li><?php 
      if(!isset($_SESSION["id_pedido"])){  
            }else{ ?>
            <a style="font-size:2em;color: white;" href="index.php?p=<?php echo base64_encode("detallecomprar")?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>

            <?php } ?>
    </li>
          
  </ul> 
 
</div>
</nav>

<div >

  

</div>


<div>
  <?php include_once("components/comp.pages.php") ?>
</div>
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" >         
          
        
       
    </div>
</div>

<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contactanos</h2>
      <hr>
      <p>Puedes ponerte en contacto  con nosotros por  cualquiera  de estos Medios.</p>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
          <p>Antioquia,<br>
            Medellin Colombia, Ant </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-envelope-o fa-2x"></i>
          <p>info@Happysexandlive.com</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-phone fa-2x"></i>
          <p> +57 123 456 1234<br>
            +57 321 456 1234</p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <h3>Escribenos un mensaje</h3>
      <form  id="contactForm" novalidate   name="form"  action="../controller/contactanos.controller.php"  method="POST">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Nombre" required="required" name="nombre">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required" name="correo" >
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Mensaje" required name="mensaje"></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Enviar</button>
      </form>
      <div class="social">
        <h3>Siguenos</h3>
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center navbar-inverse">
  <img src="recursos/logos/logo.png" style="width:160px;">
</footer>

</body>
</html>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>