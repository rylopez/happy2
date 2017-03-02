
 
<div class="row contenedor">
<div class="col-md-3 col-lg-2">
  
  
</div>

<div class="col-sm-12 col-md-7 col-lg-9 formulario">
<?php


  require_once("../model/db_conn.php");
  require_once("../model/usuarios.class.php");

             $usuarios= Gestion_Usuarios::ReadAll();
		      $titulo= "GESTIONAR USUARIOS";

		      echo " <h2 class='gestionar'>".$titulo."</h2>
		      <a class='btn new' href='index.php?p=".base64_encode('nuevo_usuario')."' ><i class='fa fa-user-plus'></i>Nuevo Usuario</a>";
 

?>
	<div class="">
		<div class="table-responsive" >    
		     

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
		                <td>$estado</td>

		                <td><a href='index.php?p=".base64_encode('actualizar_usuario')."&ui=".base64_encode($row['id_usuario'])."'><i class='fa fa-pencil'style='color:black !important'></i></a>
		                  <a href='../controller/usuarios.controller.php?ui=".base64_encode($row["id_usuario"])."&acc=d'><i class='fa fa-ban' style='color:red !important' aria-hidden='true'></i></a></td>
		              </tr>";
		            
		            
		     }

		      ?>
		      </tbody>

		    </table>
		    </div>
		    </div>
</div>
<div class="col-md-4 col-lg-1 ">
</div>
</div>

		       
