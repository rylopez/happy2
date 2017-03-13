      <?php

if($_SESSION["id_rol"]==1){//Menu Administrador

?> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper"  >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2 class='gestionar' >ADMINISTRA TU DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
                  <!-- /. ROW  --> 
                <div class="row text-center pad-top" >
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="#" onclick="openmodal('nuevo_usuario','0')" >
                            <i class="fa fa-user-plus fa-5x" aria-hidden="true"></i>
                            <h5>Nuevo Usuario</h5>
                        </a>
                      </div>
                     
                     
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="#" onclick="openmodal('nueva_publicacion','0')" >
 <i class="fa fa-file-text fa-5x"></i>
                      <h5>Nueva Publicacion</h5>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="#" onclick="openmodal('nuevo_producto','0')" >
 <i class="fa fa-industry fa-5x"></i>
                      <h5>Nuevo Producto</h5>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="#"  >
 <i class="fa fa-file-code-o fa-5x"></i>
                      <h4>Edita El View</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="DASHBOARD.php?p=<?php echo base64_encode('nuevo_producto')?>" >
 <i class="fa fa-shopping-cart fa-5x"></i>
                      <h4>Pedidos </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-newspaper-o fa-5x"></i>
                      <h4>Publicaciones</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-object-group fa-5x"></i>
                      <h4>Productos</h4>
                      </a>
                      </div>
                     
                     
                  </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-users fa-5x"></i>
                      <h4>Usuarios</h4>
                      </a>
                      </div>
                     
                     
                  </div>
              </div>
                 
          
    </div>
             <!-- /. PAGE INNER  -->
  </div>
         <!-- /. PAGE WRAPPER  -->
  <?php }
elseif ($_SESSION["id_rol"]==2) {//menu empleado
  ?>
  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2 class='gestionar'>ADMINISTRA TU DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
                  <!-- /. ROW  --> 
                <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="#" onclick="openmodal('nuevo_usuario','0')" >
                            <i class="fa fa-user-plus fa-5x" aria-hidden="true"></i>
                            <h5>Nuevo Usuario</h5>
                        </a>
                      </div>
                     
                     
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="#" onclick="openmodal('nueva_publicacion','0')" >
 <i class="fa fa-file-text fa-5x"></i>
                      <h5>Nueva Publicacion</h5>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="#" onclick="openmodal('nuevo_producto','0')" >
 <i class="fa fa-industry fa-5x"></i>
                      <h5>Nuevo Producto</h5>
                      </a>
                      </div>
                     
                     
                  </div>
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-shopping-cart fa-5x"></i>
                      <h4>Pedidos </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-newspaper-o fa-5x"></i>
                      <h4>Publicaciones</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-object-group fa-5x"></i>
                      <h4>Productos</h4>
                      </a>
                      </div>
                     
                     
                  </div>
              
              </div>
                 
          
    </div>
             <!-- /. PAGE INNER  -->
            </div>
   <?php }
elseif ($_SESSION["id_rol"]==4) {//menu experto
  ?>
  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2 class='gestionar'>ADMINISTRA TU DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
                  <!-- /. ROW  --> 
                <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="#" onclick="openmodal('nuevo_usuario','0')" >
                            <i class="fa fa-user-plus fa-5x" aria-hidden="true"></i>
                            <h5>Nuevo Usuario</h5>
                        </a>
                      </div>
                     
                     
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="#" onclick="openmodal('nueva_publicacion','0')">
 <i class="fa fa-file-text fa-5x"></i>
                      <h5>Nueva Publicacion</h5>
                      </a>
                      </div>
                     
                     
                  </div>
                  
                     
                     
                  </div>
                 
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-newspaper-o fa-5x"></i>
                      <h4>Publicaciones</h4>
                      </a>
                      </div>
                     
                     
                  </div>
             <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-file-code-o fa-5x"></i>
                      <h4>Edita El View</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                
              
              </div>
                 
          
    </div>
   <?php }
 //menu experto
  ?> 