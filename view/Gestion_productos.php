  <?php


  require_once("../model/db_conn.php");
  require_once("../model/productos.class.php");

             $productos= Gestion_Productos::ReadAll();
          

          

?>

 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2 class='gestionar'>GESTIONAR PRODUCTOS</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr/>
                
                  <!-- /. ROW  --> 
                <a href="#" onclick="openmodal('nuevo_producto','0')" class="boton-redondo"><i class="fa fa-plus" aria-hidden="true" style="color: white !important;"></i></a>
                     
        <div class="table-responsive" style="padding: 15px;" >    
         

        <table id="datatable" class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>Referencia</th>
              <th>Nombre</th>
              <th>Valor Compra</th>
              <th>valor Venta</th>
              <th>Descuento</th>
              <th>Iva</th>
              <th>Tipo Producto</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>

          <?php

          foreach ($productos as $row) {

            if($row["id_tipoproducto"] == 1){

              $tipoproducto = "Salud Sexual";        

            }elseif($row["id_tipoproducto"] == 2){
              $tipoproducto = "Lenceria";
            }elseif($row["id_tipoproducto"] == 3){
              $tipoproducto = "Juguetes";
            }elseif($row["id_tipoproducto"] == 4){
              $tipoproducto = "Estimulantes";
            }elseif($row["id_tipoproducto"] == 5){
              $tipoproducto = "Otros";
            }

            

            echo "<tr>
                    <td>".$row["id_producto"]."</td>
                    <td>".$row["referencia"]."</td>
                    <td>".$row["nombre"]."</td>
                    <td>".$row["valor_compra"]."</td>
                    <td>".$row["valor_venta"]."</td>
                    <td>".$row["descuento"]."</td>
                    <td>".$row["iva"]."</td>
                    <td>".$tipoproducto."</td>" ;?>
                    

                    <td><a href="#" data-toggle="tooltip" title="Actualizar informacion Producto" onclick="openmodal('actualizar_producto','<?php echo $row['id_producto'] ?>')"><i class="fa fa-pencil" style="color:black !important"></i></a>
                    <a href="#" data-toggle="tooltip" title="Actualizar imagenes Producto" onclick="openmodal('actualizar_foto_producto','<?php echo $row['id_producto'] ?>')" ><i class='fa fa-pencil-square-o' aria-hidden='true' style='color:gray !important' ></i></a>
                    
                      </td>
                  </tr>
                
                
      <?php   }

          ?>
          </tbody>

        </table>
        </div>
          
    </div>
             <!-- /. PAGE INNER  -->
</div>