<script type="text/javascript">
  
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



</script>
 <?php
  

  require_once("../model/db_conn.php");
  require_once("../model/publicaciones.class.php");
  require_once("../model/productos.class.php");
 
  $producto=Gestion_Productos::ReadAll();

 
  $publicacion=Gestion_Publicaciones::ReadbyId($ui);
  
  $prod=Gestion_Productos::ReadbyId($publicacion["id_producto"]);

?>
 <div  class="modal-dialog modal-lg" width="410" >  
 
<div class="form-style-6">

 
  <form   action="../controller/publicaciones.controller.php" method="POST">
        <h3 >Actualizar Publicacion</h3>

        <input   type="text" placeholder="Titulo " name="Titulo"  required data-toggle="tooltip"  title="Titulo" value="<?php echo $publicacion[1] ?>" onkeypress="return sl(event)" />
           <textarea name="texto" placeholder="texto" COLS=100 ROWS=30  data-toggle="tooltip" title="Texto"><?php echo $publicacion[2] ?></textarea>
              
           <input type="text" name="autor" value="<?php echo $publicacion["autor"] ?>"  required data-toggle="tooltip"  title="Autor" required onkeypress="return sl(event)" >
           <select name="tipo_publicacion"  data-toggle="tooltip"  title="tipo_producto"  required >
            <option value="x" disabled selected>Seleccione una opcion</option>
            
             <option value="relatos" <?php if($publicacion["tipo_publicacion"] == "relatos"){ echo "selected"; } ?>>Relato</option>
             <option value="informacion cientifica" <?php if($publicacion["tipo_publicacion"] == "informacion cientifica"){ echo "selected"; } ?>>Informacion Cientifica</option>
             <option value="habla el experto" <?php if($publicacion["tipo_publicacion"] == "habla el experto"){ echo "selected"; } ?>>Habla El Experto</option>
             <option value="mitos y verdades" <?php if($publicacion["tipo_publicacion"] == "mitos y verdades"){ echo "selected"; } ?>>Mitos y Verdades</option>
             
          </select>

            <select    name="id_producto"  required data-toggle="tooltip"  title="Producto a promocionar">
                    <option value="" disabled selected>Producto a Promocionar</option>
                    <?php
                    echo "<option selected value=".$prod['id_producto'].">".$prod['referencia']." ".$prod['nombre']."</option>";
                     foreach ($producto as $row) {
                      echo "<option value=".$row['id_producto'].">".$row['referencia']." ".$row['nombre']."</option>"; }


                    ?>

                                        
                </select>
             

           
             <input type="hidden" name="id_publicacion" value="<?php echo $publicacion[0] ?>">
            


      <br>
        

      <button class="guardar"   type="botton" name="acc" value="u">Guardar</button>
      <a  class=" btn cancelar" href="dashboard.php?p=<?php echo base64_encode("gestion_publicaciones"); ?>">Cancelar</a>
            


          
  </form>
  </div>
  </div>
 
