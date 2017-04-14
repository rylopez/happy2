<?php
require_once("../model/db_conn.php");
require_once("../model/pedidos.class.php");
require_once("../model/usuarios.class.php");
require_once("../model/imagenes.class.php");
 $id=1;
  $img=Gestion_imagenes::ReadbyId($id);
 $id_usuario=$_SESSION["id_usuario"];

?>

<div class="bg"> 
   <div style="margin-left: 10%; margin-top:2% ">


        <i style="font-family:'lacite';font-size: 4em; color: white;">"<?php echo $img["frase_compras"]; ?>"</i>
        <br>
        <i style="font-family:'lacite';font-size: 2em; color: white;">-<?php echo $img["autor_compras"]; ?></i>
        

    </div>
   
    
</div>



<style type="text/css">

.bg {
  padding: 0px;
  margin-bottom: 0px;
  color: inherit;
   width: 100%;
  height: 450px; 
  background: url('<?php echo $img["img_compras"] ?>') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-top: 100px;
  padding-bottom: 100px;
}
</style>
<?php 
$usu=Gestion_Usuarios::ReadbyId($id_usuario);


 ?>

    
    
     <h2 class='gestionar'>INFORMACION PEDIDO</h2>   
      </div>
                 
                
                  <hr>

<div class="row">
<div class="col-lg-8" style="margin-left: 10%">
 <div class="table-responsive" >
  <table class="table"">
  <thead>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>

        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><h4>NOMBRE:</h4></td>
        <td><?php echo"". $usu["nombre"]." ".$usu["apellido"]."." ?></td>
        <td><h4>N° DOCUMENTO:</h4></td>
        <td><?php echo $usu["numero_documento"] ?></td>
       </tr> 
       <tr>
        <td><h4>TELEFONO:</h4></td>
        <td><?php echo $usu["telefono"] ?></td>
        <td><h4>CELULAR:</h4></td>
        <td><?php echo $usu["celular"] ?></td>
       </tr> 
       <tr>
        <td><h4>DIRECCION:</h4></td>
        <td><?php echo $usu["direccion"] ?></td>
        <td><h4>CIUDAD DE RESIDENCIA:</h4></td>
        <td><?php echo $usu["ciudad"] ?></td>
       </tr>
        
    </tbody>
  </table>
  </div>
  <p>Si la información  no es  correcta,  o no esta actualizada por  favor actualice sus datos  antes de  de corfirmar el pedio.</p>
   <div class="col-md-5" style="margin-left: 54%">
   <a  href="#" onclick="openmodal('actualizar_usuario','<?php echo $_SESSION["id_usuario"]; ?>');"  class="btn cancelar"><h4>Actualizar</h4></a> <a  href="index.php?p=<?php echo base64_encode("viewproducto");?>"  class="btn guardar"><h4>Seguir Comprando</h4></a>
  
  </div>
  </div>

   
    <div class="col-lg-8" style="margin-left: 10%;margin-top:2%"> 
    <div class="table-responsive"  >    
     

        <table  class="table">
          <thead>
            <tr>
              <th>Cantidad</th>
              <th>Referencia</th>
              <th>Producto</th>
              <th>Valor Unidad</th>
              <th>Descuento</th>
              <th>iva</th> 
              <th>Total Producto</th>
              <th>Acciones</th>             
            </tr>
          </thead>
          <tbody>
          <?php 
       $id_pedido=$_SESSION["id_pedido"];
       $prod=Gestion_Pedidos::ReadDetalle($id_pedido);
       
        foreach ($prod as $row ) { ?>
       
         <tr>
                    <td><input class="form-control input-lg" tipe='number' id="cantidad<?php echo $row["id_producto"] ?>" value="<?php echo $row["cantidad"] ?>" onkeypress="return soloNumeros(event)" onblur="cambiartotal<?php echo $row["id_producto"] ?>(<?php echo $row["id_producto"] ?>,<?php echo $row["id_pedido"] ?>);" required data-toggle="tooltip" title="cantidad de productos" /></td>
                    <td><?php echo $row["referencia"] ?></td>
                    <td><?php echo $row["nombre"] ?></td>
                    <td><input  class="form-control input-lg"type="text" id="valor_venta<?php echo $row["id_producto"] ?>"  readonly="readonly" value="<?php echo $row["valor_venta"] ?>" /></td>
                    <td><input class="form-control input-lg" type="text" id="descuento<?php echo $row["id_producto"] ?>"  readonly="readonly" value="<?php echo $row["descuento"] ?>" /></td>
                    <td><input class="form-control input-lg" type="text" id="iva<?php echo $row["id_producto"] ?>"  readonly="readonly" value="<?php echo $row["iva"] ?>" /></td>
                    <td><input class="form-control input-lg" type="text" id="total_producto<?php echo $row["id_producto"] ?>"  readonly="readonly" value="<?php echo $row["total_producto"] ?>" /></td>
                    <td><a <?php echo "style='color:black !important' href='../controller/pedidos.controller.php?ui=".base64_encode($row['id_producto'])."&acc=d'";?> required data-toggle="tooltip" title="Eliminar del pedido"><i class="fa fa-trash" aria-hidden="true"  ></i> </a> </td>
             </tr>



                   
    <script type="text/javascript">              
         function cambiartotal<?php echo $row["id_producto"] ?>(id_producto,id_pedido) {
    var cantidad= $("input#cantidad<?php echo $row["id_producto"] ?>").val();
    cantidad=Number(cantidad);
    var valor_venta=$("input#valor_venta<?php echo $row["id_producto"] ?>").val();
    valor_venta=Number(valor_venta);    
    var descuento=$("input#descuento<?php echo $row["id_producto"] ?>").val();
    descuento=Number(descuento);
    var iva=$("input#iva<?php echo $row["id_producto"] ?>").val();
    iva=Number(iva);
    var total_producto=cantidad *(valor_venta+(valor_venta*iva/100)-(valor_venta*descuento/100));
    total_producto = total_producto.toFixed(1);     
     $("#total_producto<?php echo $row["id_producto"] ?>").val(total_producto);
 
        $.post("totaldetallepedido.php", {cant:cantidad,id_pro:id_producto,id_ped:id_pedido}, function(mensaje) {
            $("#totaldetalle").val(mensaje);
         }); 
     
     }; 
      </script> 

     <?php  }?>
     
          </tbody>
        </table>
  </div>
  <?php 
  $total=Gestion_Pedidos::totaldetallepedido($id_pedido);
  ?>
  <h3>TOTAL:<input class="form-control input-lg" type="text" id="totaldetalle"  readonly="readonly" value="<?php echo $total["total"] ?>" /></h3>
  </div>

  
  <form action="../controller/pedidos.controller.php" method="POST">
  <div class="form-style-6">
 <div class="col-md-5" style="margin-left: 54%">
  <select name="medio_pago"  required data-toggle="tooltip" title="Medio de Pago" >
            <option value="x" disabled selected>Seleccione Medio Pago</option>
            <option value="" disabled>Pagos PSE</option>
            <option value="" disabled >Efecty</option>
            <option value="contraentrega">Contra Entrega</option>
    </select>

    <input name="id_pedido"  value="<?php echo $_SESSION["id_pedido"] ?>" type="hidden"/>
  </div>
   <div class="col-md-5" style="margin-left: 54%">
   	<button class="guardar"   type="botton" name="acc" value="c"><h4>Confirmar Pedido</h4></button>
   </div>
  </div>
  </form >
</div>

<hr>
<style type="text/css">
	input {
    height: 2.5em; /* for IE */
    vertical-align: middle; 
    width: 4em;
}
</style>
<script type="text/javascript">
	function soloNumeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "0123456789";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
};

</script>