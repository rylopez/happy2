<script type="text/javascript">
  
$('[data-toggle="tooltip"]').tooltip(); 
</script>
<?php
  

  require_once("../model/db_conn.php");
  require_once("../model/productos.class.php");

 
  $producto=Gestion_Productos::ReadAll();

?>
<div  class="modal-dialog modal-lg" width="410" >  
 
<div class="form-style-6">

 
  <form  id action="../controller/publicaciones.controller.php" method="POST" enctype="multipart/form-data">
        <h3 >Nueva Publicación</h3>
        
        

          <input   type="text" placeholder="Titulo " name="Titulo"  required data-toggle="tooltip"  title="Titulo" />
           <textarea name="texto" placeholder="Escribe aqui el Articulo" COLS=100 ROWS=30  data-toggle="tooltip" title="Texto"></textarea>
          <input type="text" name="autor"   required data-toggle="tooltip"  title="Autor" required>
           <select name="tipo_publicacion"  data-toggle="tooltip"  title="tipo_producto"  required >
            <option value="x" disabled selected>Seleccione una opcion</option>
             <option value="relatos">Relato</option>
             <option value="informacion cientifica">Informacion Cientifica</option>
             <option value="habla el experto">Habla El Experto</option>
             <option value="mitos y verdades">Mitos y Verdades</option>
             
          </select>
            

              
           <label>Adjunte imagen</label>
           <input   type="file" name="file"  required data-toggle="tooltip"  title="Imagen publicación" />

            <select    name="id_producto"  required data-toggle="tooltip"  title="producto a Promocionar">
                    <option value="" disabled selected>Producto a Promocionar</option>
                    <?php
                     foreach ($producto as $row) {
                      echo "<option value=".$row['id_producto'].">".$row['referencia']." ".$row['nombre']."</option>"; }


                    ?>

                                        
                </select>
             

            


      <br>
      <button class="guardar"   type="botton" name="acc" value="c">Guardar</button>
       <a  class=" btn cancelar" href="dashboard.php?p=<?php echo base64_encode("gestion_publicaciones"); ?>">Cancelar</a>
            
  </form>
  </div>
  </div>
  
