
<?php 
 require_once("../model/db_conn.php");
require_once("../model/imagenes.class.php");
require_once("../model/productos.class.php");

 $id=1;
  $img=Gestion_imagenes::ReadbyId($id);
?>
<div class="bg"> 
   <div style="margin-left: 15%; margin-top:10% ">


        <i style="font-family:'lacite';font-size: 4em; color: white;">"<?php echo $img["frase_productos"]; ?>"</i>
        <br>
        <i style="font-family:'lacite';font-size: 2em; color: white;">-<?php echo $img["autor_productos"]; ?></i>
        

    </div>
    <hr>
    <div style="margin-left: 15%">
      <form accept-charset="utf-8" method="POST" action="viewproductos.php">
        <div class="col-xs-4"> 
         <select name="select" class="form-control" data-toggle="tooltip"  title="Filtrar" id="filtroproducto" required >
            <option value="x" disabled selected>Seleccione Filtro</option>
             <option value="salud sexual">Salud Sexual</option>
             <option value="lenceria">Lenceria</option>
             <option value="Juguetes">Juguetes Sexuales</option>
             <option value="estimulantes">Estimulantes</option>
              <option value="Hombre">Hombre</option>
               <option value="Mujer">Mujer</option>
          </select>
          </div>
      <div class="col-xs-4">    
      <input  class="form-control"  type="text" name="busqueda" id="busqueda" value="" data-toggle="tooltip"  title="buscar" placeholder="Buscar" required maxlength="30" autocomplete="off" onKeyup="buscar();" />
      </div>
       </form>
    </div>
    
</div>



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
<div class="container">
<div id="productos"></div>
</div>

<div id="works">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center" style="margin-top:-100px !important;">
      <h2>PRODUCTOS</h2>
      <hr>
      <div class="clearfix"></div>
      <p>Puedes encontrar lo que estas  buscando, para ver informacion mas detallada solo da  clic en ver detalle</p>
      <hr>
      <div class="row">
     
      </div>
    </div>
    
    <div class="row" style="margin-top:2%">
      <div  class="portfolio-items">

       <?php



       $productos= Gestion_Productos::Readcantidad();

       foreach ($productos as $row) {



       
       echo "<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='#' onclick=openmodal('detalle_producto','".$row['id_producto']."') &quot; >
              <div class='hover-text'>
                <h4>".$row["nombre"]."</h4>
                <p>Costo: $".$row["valor_venta"]."</p>
                 <p>Descuento:".$row["descuento"]."%</p>
              </div>
              <img src='".$row["url_foto1"]."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>"; ?>
          <a  href="../controller/comprar.php?ui=<?php echo base64_encode($row["id_producto"]) ?>" class="btn guardar"><h4>Comprar</h4></a>
 <a  href='#' onclick="openmodal('detalle_producto','<?php echo $row["id_producto"] ?>')"  class="btn cancelar"><h4>Ver Detalle</h4></a>
        </div>
        <?php }  

          

      ?>
        
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
    $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
});

function buscar() {
    var textoBusqueda = $("input#busqueda").val();
 
     if (textoBusqueda != "") {
        $.post("filtroproducto.php", {elegido: textoBusqueda}, function(mensaje) {
            $("#productos").html(mensaje);
         }); 
     } else { 
        $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
        };
};
</script>