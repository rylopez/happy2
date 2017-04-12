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
   <div style="margin-left: 15%; margin-top:5% ">


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
  height: 300px; 
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
 <div id="page-wrapper" >
    <div id="page-inner">
    <div class="row">
    <div class="col-lg-12">
     <h2 class='gestionar'>INFORMACION PEDIDO</h2>   
      </div>
    </div>              
                
                  <hr/>

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
   <div class="col-md-4" style="margin-left: 84%">
   <a  href="#" onclick="openmodal('actualizar_usuario','<?php echo $usu["id_usuario"] ?>')"  class="btn guardar"><h4>Actualizar</h4></a>
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
              <th>Acciones</th>             
            </tr>
          </thead>
          <tbody>
          <?php 
       $id_pedido=$_SESSION["id_pedido"];
       $prod=Gestion_Pedidos::ReadDetalle($id_pedido);
       $total=0;
        foreach ($prod as $row ) {
        	
        $total_temp=$row["cantidad"]*($row["valor_venta"]+($row["valor_venta"]*$row["iva"]/100)-($row["valor_venta"]*$row["descuento"]/100));
        $total=$total+$total_temp;
         echo "<tr>
                    <td><input tipe='number' value='".$row["cantidad"]."' /></td>
                    <td>".$row["referencia"]."</td>
                    <td>".$row["nombre"]."</td>
                    <td>".$row["valor_venta"]."</td>
                    <td>".$row["descuento"]."</td>
                    <td>".$row["iva"]."</td>
                    <td><a href='../controller/pedidos.controller.php?ui=".base64_encode($row['id_producto'])."&acc=d&total=".base64_encode($total_temp)."'><i class='fa fa-trash' aria-hidden='true¿  style='color:black !important'></i></a></td>" ;



                    }?>
         

          </tbody>
        </table>
  </div>
  </div>

</div>
</div>
<hr>