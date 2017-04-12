  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin-left: 0px;
      margin-top: 0px;
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


  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
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
        <div class="carousel-caption" style="margin-left:0% !important;" >
          <h4><?php echo $producto["nombre"];?></h4>
          <?php echo" <a href='../controller/comprar.php?ui=".base64_encode($producto['id_producto'])."' class= 'btn guardar'><h4>Comprar</h4></a>" ?>
           <a  href="index.php?p=<?php echo base64_encode("viewproducto")?>" class="btn cancelar"><h4>Cancelar</h4></a>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo $producto["url_foto2"] ;?>" >
        <div class="carousel-caption">
          <h4><?php echo $producto["nombre"];?></h4>
         <?php echo" <a href='../controller/comprar.php?ui=".base64_encode($producto['id_producto'])."' class= 'btn guardar'><h4>Comprar</h4></a>" ?>
           <a  href="index.php?p=<?php echo base64_encode("viewproducto")?>" class="btn cancelar"><h4>Cancelar</h4></a>
        </div>
      </div>
    
      <div class="item">
        <img src="<?php echo $producto["url_foto3"] ;?>" >
        <div class="carousel-caption">
          <h4><?php echo $producto["nombre"];?></h4>
          <?php echo" <a href='../controller/comprar.php?ui=".base64_encode($producto['id_producto'])."' class= 'btn guardar'><h4>Comprar</h4></a>" ?>
           <a  href="index.php?p=<?php echo base64_encode("viewproducto")?>" class="btn cancelar"><h4>Cancelar</h4></a>
        </div>
      </div>

      
  
    </div>

    <!-- Left and right controls -->
     <?php 
      if ($producto["id_tipoproducto"]==1) {
        $tipo="Salud Sexual";
      }elseif ($producto["id_tipoproducto"]==2) {
        $tipo="Lenceria";
      }elseif ($producto["id_tipoproducto"]==3) {
        $tipo="Juguetes Sexuales";
      }elseif ($producto["id_tipoproducto"]==4) {
        $tipo="Estimulante";
      }else {
        $tipo="Otro";
      }
      ?>
  </div>
  <div class="about">
  <div class="row">
      <div class="col-md-4">
      <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th></th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><h4>REFERENCIA:</h4></td>
        <td><?php echo $producto["referencia"] ?></td>
       </tr> 
       <tr>
        <td><h4>NOMBRE:</h4></td>
        <td><?php echo $producto["nombre"] ?></td>
       </tr> 
       <tr>
        <td><h4>PUBLICO OBJETIVO:</h4></td>
        <td><?php echo $producto["sexo"] ?></td>
       </tr>
        <tr>
        <td><h4>TIPO:</h4></td>
        <td><?php echo $tipo ?></td>
       </tr>
       <?php if ($producto["id_tipoproducto"]==2) {
         echo "<tr>
        <td><h4>TALLA:</h4></td>
        <td>".$producto["talla"]."</td>
       </tr>";
       } ?>
    </tbody>
  </table>
  </div>
  </div>
      
      
    
    
    
      <div class="col-md-4">
        <div class="about-text">
          <h4>DESCRIPCION</h4>
          <p><?php echo $producto["descripcion"] ?></p>
          
        </div>
      </div>
      <div class="col-md-4">
        <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th></th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><h4>CANTIDAD DISPONIBLE:</h4></td>
        <td><?php echo $producto["cantidad"] ?></td>
       </tr> 
       <tr>
        <td><h4>VALOR:</h4></td>
        <td><?php echo $producto["valor_venta"] ?></td>
       </tr> 
       <tr>
        <td><h4>IVA:</h4></td>
        <td><?php echo $producto["iva"] ?>%</td>
       </tr>
        <tr>
        <td><h4>DESCUENTO:</h4></td>
        <td><?php echo $producto["descuento"] ?>%</td>
       </tr>
       
    </tbody>
  </table>
  </div>
      </div>
    </div>
</div>

          
  </div>
</div>