<script type="text/javascript">
  $("#tipoproducto").change(function () {
           $("#tipoproducto option:selected").each(function () {
            elegido=$(this).val();
            $.post("tipoproducto.php", { elegido: elegido }, function(data){
            $("#talla").html(data);
            });            
        });
   });
$('[data-toggle="tooltip"]').tooltip(); 

function sl(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
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
}
function sn(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " 0123456789";
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
}



</script>
 <?php
  

  require_once("../model/db_conn.php");
  require_once("../model/productos.class.php");

 
  $producto=Gestion_Productos::ReadbyId($ui);

?>
 <div  class="modal-dialog modal-lg" width="410" >  
 
<div class="form-style-6">

 
  <form   action="../controller/productos.controller.php" method="POST">
        <h3 >Actualizar Producto</h3>
        
          <input  type="text" placeholder="Referencia" name="referencia"  required data-toggle="tooltip" title="Referencia" value="<?php echo $producto[1] ?>" readonly />
              
            <input  type="text" placeholder="Nombre" name="nombre"  required data-toggle="tooltip" title="Nombre producto" value="<?php echo $producto[2] ?>" onkeypress="return sl(event)"   />             
            
            <input   type="number" name="valor_compra" placeholder="Valor Compra" required data-toggle="tooltip" title="Valor de Compra" value="<?php echo $producto[3] ?>" onkeypress="return sn(event)"  />

            <input   type="number" name="valor_venta" placeholder="Valor Venta" required data-toggle="tooltip" title="Valor de Venta" value="<?php echo $producto[4] ?>" onkeypress="return sn(event)"  />

            <input   type="number" name="descuento" placeholder="Descuento" required data-toggle="tooltip" title=" Porcentaje Descuento" value="<?php echo $producto[5] ?>" onkeypress="return sn(event)" />

            <input   type="number" name="iva" placeholder="Iva" required data-toggle="tooltip" title="Porcentaje Iva" value="<?php echo $producto[6] ?>" onkeypress="return sn(event)"  id="miInput" />

            <input   type="number" name="cantidad" placeholder="Cantidad Existentes" required data-toggle="tooltip" title="Cantidades Existentes" value="<?php echo $producto[12] ?>" onkeypress=" return sn(event)"   />

            
            <select    name="sexo"  required data-toggle="tooltip" title="Publico Objectivo" >
                    <option value="" disabled selected>Publico Objectivo</option>
                    <option value="hombre" <?php if($producto[13] == "hombre"){ echo "selected"; } ?>>Hombres</option>
                    <option value="mujer" <?php if($producto[13] == "mujer"){ echo "selected"; } ?> >Mujeres</option>
                    <option value="indiferente" <?php if($producto[13] == "indiferente"){ echo "selected"; } ?> >Indiferente</option>
                                        
                </select>

            <?php if ($producto[11]==2) { ?>
            <select    name="id_tipoproducto" id="tipoproducto" required data-toggle="tooltip" title="Tipo de Producto" >
                    <option value="" disabled selected>Seleccione tipo producto</option>
                    <option value="2" <?php if($producto[11] == "2"){ echo "selected"; } ?> >Lenceria</option>
                   Otros</option>                    
            </select>
            <input  type="text" placeholder="Talla Lenceria" name="talla"  required data-toggle="tooltip" title="Talla Lenceria" value="<?php echo $producto[14] ?>" />
              
           <?php }else{  ?> 

            <select    name="id_tipoproducto" id="tipoproducto" required data-toggle="tooltip" title="Tipo de Producto" >
                    <option value="" disabled selected>Seleccione tipo producto</option>
                    <option value="1" <?php if($producto[11] == "1"){ echo "selected"; } ?>>Salud Sexual</option>
                    <option value="2" <?php if($producto[11] == "2"){ echo "selected"; } ?> >Lenceria</option>
                    <option value="3" <?php if($producto[11] == "3"){ echo "selected"; } ?>>Juguetes</option>
                    <option value="4" <?php if($producto[11] == "4"){ echo "selected"; } ?>>Estimulantes</option>
                    <option value="5" <?php if($producto[11] == "5"){ echo "selected"; } ?>>Otros</option>                    
                </select>
                <?php } ?>
            <div id="talla"></div>
             <input type="hidden" name="autor" value="<?php echo ($_SESSION["nombre"])." ".($_SESSION["apellido"]); ?>">
             <input type="hidden" name="id_producto" value="<?php echo $producto [0] ?>">

            <textarea name="descripcion" placeholder="Descripcion Producto" data-toggle="tooltip" title="Descripcion detallada del Producto"  COLS=100 ROWS=30  > <?php echo $producto[7] ?></textarea>       



      <button class="guardar"   type="botton" name="acc" value="u">Guardar</button>
      <a  class=" btn cancelar" href="dashboard.php?p=<?php echo base64_encode("gestion_productos"); ?>">Cancelar</a> 
            


          
  </form>
  </div>
  </div>
 
