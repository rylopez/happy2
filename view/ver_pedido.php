<script type="text/javascript">
  
$('[data-toggle="tooltip"]').tooltip(); 
</script>
<?php
  

  require_once("../model/db_conn.php");
  require_once("../model/pedidos.class.php");
 
$usu= Gestion_Pedidos::Readbypedido($ui);
 
 
?>
<div  class="modal-dialog modal-lg" width="410" >  

 
<div class="form-style-6">

 
        <h3 >Detalle Pedido</h3>
<div class="row">
<div class="col-lg-11" >
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
        <td><h4>CLIENTE:</h4></td>
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
       <tr>
        <td><h4>FORMA DE PAGO:</h4></td>
        <td><?php echo $usu["forma_pago"] ?></td>
        <td><h4>FECHA PEDIDO:</h4></td>
        <td><?php echo $usu["fecha_pedido"] ?></td>
       </tr>
        
    </tbody>
  </table>
 
  </div>

   
    <div class="col-lg-12" > 
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
                        
            </tr>
          </thead>
          <tbody>
          <?php 
      
       $prod=Gestion_Pedidos::ReadDetalle($ui);
       
        foreach ($prod as $row ) { ?>
       
         <tr>
                    <td><?php echo $row["cantidad"] ?></td>
                    <td><?php echo $row["referencia"] ?></td>
                    <td><?php echo $row["nombre"] ?></td>
                    <td><?php echo $row["valor_venta"] ?></td>
                    <td><?php echo $row["descuento"] ?></td>
                    <td><?php echo $row["iva"] ?></td>
                    <td><?php echo $row["total_producto"] ?></td>
                   
           </tr>


 

     <?php  }?>
     
          </tbody>
        </table>
  </div>
  
  <h4>TOTAL:<input class="form-control input-lg" type="text" id="totaldetalle"  readonly="readonly" value="<?php echo $usu["total"] ?>" /></h4>
  </div>

  
  <form action="../controller/pedidos.controller.php" method="POST">
  <div class="form-style-6">
 <?php if ($usu["estado"]==1){  ?>
  <select name="estado"  required data-toggle="tooltip" title="Estado" >
            <option value="x" disabled>Seleccione Estado</option>
            <option value="1" selected>Sin Confirmar</option>
            <option value="2" disabled >Confirmado</option>
            <option value="3" disabled >En Trasporte</option>
            <option value="4" disabled >Entregado</option>
            <option value="5">Cancelado</option>
    </select>
 <?php }elseif ($usu["estado"]==2){  ?>
 <select name="estado"  required data-toggle="tooltip" title="Estado" >
            <option value="x" disabled>Seleccione Estado</option>
            <option value="1" disabled>Sin Confirmar</option>
            <option value="2" selected>Confirmado</option>
            <option value="3" >En Trasporte</option>
            <option value="4" disabled >Entregado</option>
            <option value="5">Cancelado</option>
    </select>
 <?php }elseif ($usu["estado"]==3){  ?>
 <select name="estado"  required data-toggle="tooltip" title="Estado" >
            <option value="x" disabled>Seleccione Estado</option>
            <option value="1" disabled>Sin Confirmar</option>
            <option value="2" disabled>Confirmado</option>
            <option value="3" selected>En Trasporte</option>
            <option value="4" >Entregado</option>
            <option value="5">Cancelado</option>
    </select>
 <?php }elseif ($usu["estado"]==4){  ?>
 <select name="estado"  required data-toggle="tooltip" title="Estado" >
            <option value="x" disabled>Seleccione Estado</option>
            <option value="1" disabled>Sin Confirmar</option>
            <option value="2" disabled>Confirmado</option>
            <option value="3" disabled>En Trasporte</option>
            <option value="4" selected >Entregado</option>
            <option value="5" disabled>Cancelado</option>
    </select>

 <?php }elseif ($usu["estado"]==5){  ?>


  <input class="form-control input-lg" type="text"   readonly="readonly" value="<?php echo $usu["estado"] ?>" />
   <?php } ?>
  
  </div>

    <input name="id_pedido"  value="<?php echo $usu["id_pedido"] ?>" type="hidden"/>

    <input name="correo"  value="<?php echo $usu["correo"] ?>" type="hidden"/>

    <input name="nombre"  value="<?php echo $usu["nombre"] ?>" type="hidden"/>
    <input name="apellido"  value="<?php echo $usu["apellido"] ?>" type="hidden"/>
    <input name="direccion"  value="<?php echo $usu["direccion"] ?>" type="hidden"/>
    <input name="direccion"  value="<?php echo $usu["direccion"] ?>" type="hidden"/>

    <button class="guardar"   type="botton" name="acc" value="ue">Guardar</button>
               <a  class=" btn cancelar" href="index.php?p=<?php echo base64_encode(""); ?>">Cancelar</a>
 
  </form >
</div>

       
        
  
             
         

  </div>
 
  </div>
  </div>

