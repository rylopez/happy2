<?php
require_once("../model/db_conn.php");
require_once("../model/pedidos.class.php");
require_once("../model/imagenes.class.php");
 $id=1;
  $img=Gestion_imagenes::ReadbyId($id);
 $id_usuario=$_SESSION["id_usuario"];

?>

<div class="bg"> 
   <div style="margin-left: 10%; margin-top:2% ">


        <i style="font-family:'lacite';font-size: 4em; color: white;">"<?php echo $img["frase_compras"]; ?>"</i>
        <br>
        <i style="font-family:'lacite';font-size: 2em; color: white;">-<?php echo $img["autor_compras"]; ?></i>
        

    </div>
   
    
</div>



<style type="text/css">

.bg {
  padding: 0px;
  margin-bottom: 0px;
  color: inherit;
   width: 100%;
  height: 450px; 
  background: url('<?php echo $img["img_compras"] ?>') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-top: 100px;
  padding-bottom: 100px;
}
</style>
<?php 
$id_usuario=$_SESSION["id_usuario"];
$ped= Gestion_Pedidos::Readbyusuario($id_usuario);


 ?>

    
    
     <h2 class='gestionar'>HISTORIAL PEDIDOS</h2>   
      </div>
                 
                
                  <hr>

<div class="row">
<div class="col-lg-8" style="margin-left: 10%">
<div class="table-responsive" style="padding: 15px;" >    
         

        <table id="datatable" class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>Fecha Pedido</th>
              <th>Nombre completo</th>
              <th>Estado</th>
              <th>Total</th>
              <th>Forma de Pago</th>
             
             
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
                    
                   
                  </tr>
                
                
      <?php           
                
         }

          ?>
          </tbody>

        </table>
        </div>
  </div>
