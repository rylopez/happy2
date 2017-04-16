
 
<?php


  require_once("../model/db_conn.php");
  require_once("../model/usuarios.class.php");

             $usuarios= Gestion_Usuarios::ReadAll();
		      

?>
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2 class='gestionar'>GESTIONAR USUARIOS</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr/>
                
                  <!-- /. ROW  --> 
                <a href="#" onclick="openmodal('nuevo_usuario','0')" class="boton-redondo"><i class="fa fa-plus" aria-hidden="true" style="color: white !important;"></i></a>
		<div class="table-responsive" style="padding: 15px;" >    
		     

		    <table id="datatable" class="table">
		      <thead>
		        <tr>
		          <th>id</th>
		          <th>Tipo de Documento</th>
		          <th>Num. Documento</th>
		          <th>Nombres</th>
		          <th>Apellidos</th>
		          <th>Correo</th>
		          <th>Perfil</th>
		          <th>Estado</th>
		          <th>Acciones</th>
		        </tr>
		      </thead>
		      <tbody>

		      <?php

		      foreach ($usuarios as $row) {

		        if($row["id_rol"] == 1){

		          $perfil = "Administrador";        

		        }elseif($row["id_rol"] == 2){
		          $perfil = "Empleado";
		        }elseif($row["id_rol"] == 3){
		          $perfil = "Cliente";
		        }

		        if($row["estado"] == 1){
		          $estado = "Activo";
		        }elseif($row["estado"] == 0){
		          $estado = "inactivo";   }

		        echo "<tr>
		                <td>".$row["id_usuario"]."</td>
		                <td>".$row["tipo_documento"]."</td>
		                <td>".$row["numero_documento"]."</td>
		                <td>".$row["nombre"]."</td>
		                <td>".$row["apellido"]."</td>
		                <td>".$row["correo"]."</td>
		                <td>$perfil</td>
		                <td>$estado</td>"; ?>
		               <td><a href="#"  data-toggle="tooltip" title="Actualizar Usuario" onclick="openmodal('actualizar_usuario','<?php echo $row['id_usuario'] ?>')"><i class="fa fa-pencil" style="color:black !important"></i></a>
                  
                     </td>
                  </tr>
                
                
      <?php           
		            
		     }

		      ?>
		      </tbody>

		    </table>
		    </div>
		    </div>


		       
