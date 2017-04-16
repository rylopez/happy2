  <script type="text/javascript">
  
$('[data-toggle="tooltip"]').tooltip(); 
</script>
  <?php

 require_once("../model/db_conn.php");
 require_once("../model/imagenes.class.php");
  $ui=1;
  $imagenes=Gestion_Imagenes::ReadbyId($ui);
  ?>
 <div  class="modal-dialog modal-lg" width="410" >  
 
<div class="form-style-6">  
<h3 >EDITAR VIEWS</h3>
         <form  id action="../controller/imagenes.controller.php" method="POST" enctype="multipart/form-data">
        <h2 >Actualizar Parallax N.1 index </h2>
        
        
              
           <label>Adjunte imagen</label>
           <input   type="file" name="file"  required data-toggle="tooltip"  title="Imagen parallax 1" />
            <input value="<?php echo $imagenes["frase_index_1"] ?>"  type="text" placeholder="Frase" name="frase"  required data-toggle="tooltip"  title="Frase" />
             <input value="<?php echo $imagenes["autor_index_1"] ?>"  type="text" placeholder="Autor Frase" name="autor"  required data-toggle="tooltip"  title="Autor Frase" />

        

      <br>
      <button class="guardar"   type="botton" name="acc" value="index1">Cambiar</button>
       <a  class=" btn cancelar" target="_blank" href="index.php#index1">Ver</a>
            
  </form>
  <form  id action="../controller/imagenes.controller.php" method="POST" enctype="multipart/form-data">
        <h2 >Actualizar  Parallax N.2  index</h2>
        
        
              
           <label>Adjunte imagen</label>
           <input   type="file" name="file"  required data-toggle="tooltip"  title="Imagen parallax 2" />
           
            <input value="<?php echo $imagenes["frase_index_2"] ?>"  type="text" placeholder="Frase" name="frase"  required data-toggle="tooltip"  title="Frase" />
             <input value="<?php echo $imagenes["autor_index_2"] ?>"  type="text" placeholder="Autor Frase" name="autor"  required data-toggle="tooltip"  title="Autor Frase" />

        

      <br>
      <button class="guardar"   type="botton" name="acc" value="index2">Cambiar</button>
       <a  class=" btn cancelar" target="_blank" href="index.php#index2">Ver</a>
            
  </form>
  <form  id action="../controller/imagenes.controller.php" method="POST" enctype="multipart/form-data">
        <h2 >Actualizar  Imagen Principal view Producto </h2>
        
        
              
           <label>Adjunte imagen</label>
           <input   type="file" name="file"  required data-toggle="tooltip"  title="Imagen View Producto" />
           
            <input value="<?php echo $imagenes["frase_productos"] ?>"  type="text" placeholder="Frase" name="frase"  required data-toggle="tooltip"  title="Frase" />
             <input value="<?php echo $imagenes["autor_productos"] ?>"  type="text" placeholder="Autor Frase" name="autor"  required data-toggle="tooltip"  title="Autor Frase" />

        

      <br>
      <button class="guardar"   type="botton" name="acc" value="producto">Cambiar</button>
       <a  class=" btn cancelar" target="_blank" href="index.php?p=<?php echo base64_encode("viewproducto"); ?>">Ver</a>
            
  </form>
  <form  id action="../controller/imagenes.controller.php" method="POST" enctype="multipart/form-data">
        <h2 >Actualizar Imagen Principal  view Compras </h2>
        
        
              
           <label>Adjunte imagen</label>
           <input   type="file" name="file"  required data-toggle="tooltip"  title="Imagen View Compras" />
           
            <input value="<?php echo $imagenes["frase_compras"] ?>"  type="text" placeholder="Frase" name="frase"  required data-toggle="tooltip"  title="Frase" />
             <input value="<?php echo $imagenes["autor_compras"] ?>"  type="text" placeholder="Autor Frase" name="autor"  required data-toggle="tooltip"  title="Autor Frase" />

        

      <br>
      <button class="guardar"   type="botton" name="acc" value="compras">Cambiar</button>
       <a  class=" btn cancelar" target="_blank" href="index.php?p=<?php echo base64_encode("detallecomprar"); ?>">Ver</a>
            
  </form>
  <form  id action="../controller/imagenes.controller.php" method="POST" enctype="multipart/form-data">
        <h2 >Actualizar Imagen Principal View Publicaciones </h2>
        
        
              
           <label>Adjunte imagen</label>
           <input   type="file" name="file"  required data-toggle="tooltip"  title="Imagen publicación" />

            <input value="<?php echo $imagenes["frase_publicaciones"] ?>"  type="text" placeholder="Frase" name="frase"  required data-toggle="tooltip"  title="Frase" />
             <input value="<?php echo $imagenes["autor_publicaciones"] ?>"  type="text" placeholder="Autor Frase" name="autor"  required data-toggle="tooltip"  title="Autor Frase" />

        

      <br>
      <button class="guardar"   type="botton" name="acc" value="publicacion">Cambiar</button>
       <a  class=" btn cancelar" target="_blank" href="index.php?p=<?php echo base64_encode("viewPublicaciones"); ?>">Ver</a>
            
  </form>

        </div>
          
    </div>
             <!-- /. PAGE INNER  -->
