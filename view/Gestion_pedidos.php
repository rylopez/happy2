 
<?php


  require_once("../model/db_conn.php");
  require_once("../model/pedidos.class.php");

             $ped= Gestion_Pedidos::ReadAll();
		      

?>
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2 class='gestionar'>GESTIONAR PEDIDOS</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr/>
                
                  <!-- /. ROW  --> 
               
		<div class="table-responsive" style="padding: 15px;" >    
		     

		    <table id="datatable" class="table">
		      <thead>
		        <tr>
		          <th>id</th>
		          <th>Fecha Pedido</th>
		          <th>Cliente</th>
		          <th>Estado</th>
		          <th>Total</th>
		          <th>Forma de Pago</th>
		          <th>Accion</th>
		         
		        </tr>
		      </thead>
		      <tbody>

		      <?php

		      foreach ($ped as $row) { ?>


		        <tr>
		                <td><?php echo $row["id_pedido"] ?></td>
		                <td><?php echo $row["fecha_pedido"] ?></td>
		                <td><?php echo $row["nombre"]." ".$row["apellido"] ?></td>
		                <td>
		                	<?php if($row["estado"]==1){
		                		$estado="Sin Confirmar";
		                	}elseif ($row["estado"]==2) {
		                		$estado="Confirmado";
		                	}elseif ($row["estado"]==3) {
		                		$estado="En Trasporte";
		                	}elseif ($row["estado"]==4) {
		                		$estado="Entregado";
		                	}elseif ($row["estado"]==6) {
		                		$estado="Cancelado";
		                	}
		                	echo $estado;
		                	?>
		                </td>
		                <td><?php echo $row["total"] ?></td>
		                <td><?php echo $row["forma_pago"] ?></td>
		                
		               <td><a style="color: black !important; font-size: 2em;" href="#" onclick="openmodal('ver_pedido','<?php echo $row['id_pedido'] ?>')"><i class="fa fa-eye" aria-hidden="true"></i></a>
                  
                   </td>
                  </tr>
                
                
      <?php           
		            
		     }

		      ?>
		      </tbody>

		    </table>
		    </div>
		    </div>