
 <?php


  require_once("../model/db_conn.php");
  require_once("../model/publicaciones.class.php");
 $publicacion= Gestion_Publicaciones::ReadAll();
            

?>
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2 class='gestionar'>GESTIONAR PUBLICACIONES</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr/>
                
                  <!-- /. ROW  --> 
                <a href="#" onclick="openmodal('nueva_publicacion','0')" class="boton-redondo"><i class="fa fa-plus" aria-hidden="true" style="color: white !important;"></i></a>
		<div class="table-responsive" style="padding: 15PX;" >    
		     

		    <table id="datatable" class="table">
		      <thead>
		        <tr>
		          <th>id</th>
		          <th>Titulo</th>
		          <th>Contenido</th>
		          <th>Autor</th>
		          <th>Acciones</th>
		          

		        </tr>
		      </thead>
		      <tbody>

		      <?php

		      foreach ($publicacion as $row) {

		        

		        

		        echo "<tr>
		                <td>".$row["id_publicacion"]."</td>
		                <td>".$row["titulo"]."</td>
		                <td>".$row["texto"]."</td>
		                <td>".$row["autor"]."</td>";?>
		                
		                

		              <td><a href="#" onclick="openmodal('actualizar_publicacion','<?php echo $row['id_publicacion'] ?>')"><i class="fa fa-pencil" style="color:black !important"></i></a>
                    <a href="#" onclick="openmodal('actualizar_file_publicacion','<?php echo $row['id_publicacion'] ?>')" ><i class='fa fa-pencil-square-o' aria-hidden='true' style='color:gray !important' ></i></a>
                      <a href='../controller/publicaciones.controller.php?ui=<?PHP echo base64_encode($row["id_producto"])?>&acc=d'><i class='fa fa-ban' style='color:red !important' aria-hidden='true'></i></a></td>
                  </tr>
                
		            
		            
		    <?php }     ?>
		      </tbody>

		    </table>
		     </div>
          
    </div>
             <!-- /. PAGE INNER  -->
</div>