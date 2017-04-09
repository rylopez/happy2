  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin-left: 0px;
  }

  </style>
 <?php
  

  require_once("../model/db_conn.php");
  require_once("../model/productos.class.php");

 
  $producto=Gestion_Productos::ReadbyId($ui);

?>
 <div  class="modal-dialog modal-lg" width="410" >  
 
<div class="form-style-6">
  
<h3 >Detalle Producto</h3>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="<?php echo $producto["url_foto1"] ;?>" >
        <div class="carousel-caption">
          <h4><?php echo $producto["nombre"];?></h4>
          
        </div>
      </div>

      <div class="item">
        <img src="<?php echo $producto["url_foto2"] ;?>" >
        <div class="carousel-caption">
          <h4><?php echo $producto["nombre"];?></h4>
          
        </div>
      </div>
    
      <div class="item">
        <img src="<?php echo $producto["url_foto3"] ;?>" >
        <div class="carousel-caption">
          <h4><?php echo $producto["nombre"];?></h4>
          
        </div>
      </div>

      
  
    </div>

    <!-- Left and right controls -->
   
  </div>
</div>

          
  </div>
  </div>