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

        <input   type="text" placeholder="Titulo " name="Titulo"  required data-toggle="tooltip"  title="Titulo" value="<?php echo $publicacion[1] ?>" />
           <textarea name="texto" placeholder="texto" COLS=100 ROWS=30  data-toggle="tooltip" title="Texto"><?php echo $publicacion[2] ?></textarea>
              
           

            <select    name="id_producto"  required data-toggle="tooltip"  title="Producto a promocionar">
                    <option value="" disabled selected>Producto a Promocionar</option>
                    <?php
                    echo "<option selected value=".$prod['id_producto'].">".$prod['referencia']." ".$prod['nombre']."</option>";
                     foreach ($producto as $row) {
                      echo "<option value=".$row['id_producto'].">".$row['referencia']." ".$row['nombre']."</option>"; }


                    ?>

                                        
                </select>
             

             <input type="hidden" name="autor" value="<?php echo ($_SESSION["nombre"])." ".($_SESSION["apellido"]); ?>">
             <input type="hidden" name="id_publicacion" value="<?php echo $publicacion[0] ?>">
            


      <br>
        

      <button class="guardar"   type="botton" name="acc" value="u">Guardar</button>
      <a  class=" btn cancelar" href="index.php?p=<?php echo base64_encode("gestion_publicaciones"); ?>">Cancelar</a>
            


          
  </form>
  </div>
  </div>
 
