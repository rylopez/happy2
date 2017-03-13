<?php 
//El codigo comentado se debe  actualizar cuando este  la dasboard lista

//cambio casa 

  session_start();
 
 ?>
<!DOCTYPE html>
<html lang="Es">
<head>
  <title>Happy Sex and Life</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="recursos/css/estilo.css">
  <link href="recursos/css/custom.css" rel="stylesheet" />
  
  <link rel="stylesheet" type="text/css" href="recursos/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="recursos/plugins/sweetalert/dist/sweetalert.css">
  <link rel="stylesheet" href="recursos/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="recursos/plugins/bootstrap/css/bootstrap.min.css">
  
  <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>

  
  <script type="text/javascript" charset="utf8" src="recursos/plugins/datatable/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="recursos/plugins/sweetalert/dist/sweetalert.min.js"></script>
<script src="recursos/plugins/bootstrap/js/bootstrap.min.js"></script>
 <script type="text/javascript">
  function openmodal(pagina,id){
          $("#myModal").modal('show');
          $.post("abrirmodal.php",{pag:pagina,uid:id},function(data){
            $("#myModal").html(data);
          });
        };
    $(document).ready( function () {
              $('#datatable').DataTable({  
               "language": {               
               "url": "https://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"       
                }
                });

       
  $("#tipoproducto").change(function () {
           $("#tipoproducto option:selected").each(function () {
            elegido=$(this).val();
            $.post("tipoproducto.php", { elegido: elegido }, function(data){
            $("#talla").html(data);
            });            
        });
   });
  
   <?php

                    if(isset($_GET["m"],$_GET["tm"])){
                  echo "swal({ title: '',   text: '".base64_decode($_GET["m"])."',   type: '".base64_decode($_GET["tm"])."',  imageUrl: 'recursos/logos/logo.png',imageSize: '200x120'});";

                  }
      ?>
     $('[data-toggle="tooltip"]').tooltip(); 
     $('#nav-icon').click(function(){
    $(this).toggleClass('animate-icon');
    $('#overlay').fadeToggle();
     });
       $('#overlay').click(function(){
       $('#nav-icon').removeClass('animate-icon');
        $('#overlay').toggle();
       });

      
       });
 
</script>
  
</head>
<body>

           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="recursos/logos/logo.png" style="width:60px;" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
               
      <?php
      if(!isset($_SESSION["id_usuario"])){  
            }else{ ?>
    
    <a   data-toggle="dropdown" id="nomusu" ><i class="fa fa-user" aria-hidden="true"></i>
 <?php echo "".($_SESSION["nombre"])." ".($_SESSION["apellido"]);?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
    <ul class="dropdown-menu dropdown-menu-right">
      <li><a href="#"onclick="openmodal('actualizar_usuario','<?php echo $_SESSION["id_usuario"]; ?>')" >Actualizar mi perfil</a></li>
      <li class="divider"></li>
      <li><a href="cerrarsesion.php">Cerrar Sesión</a></li>      
    </ul>
      <?php } ?>
    

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side"  role="navigation" >
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 
                 <?php 
           
        if(!isset($_SESSION["id_usuario"])){  
            }else{
         include_once("components/menu.php");
         } ?>
                    
                </ul>
          </div>

        </nav>

        <?php include_once("components/comp.pagesdashboard.php") ?>
        <div class="modal fade" id="myModal" role="dialog" >         
          
        
       
    </div>

        </div>

        
    <!--
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy; Yohanny Lopez
                </div>
            </div>
        </div> -->
</body>
</html>