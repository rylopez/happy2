<?php

if($_SESSION["id_rol"]==1){//Menu Administrador

?> 
<li >
   <a href="dashboard.php?p=<?php echo base64_encode('')?>" ><h3><i class="fa fa-home fa-2x" aria-hidden="true"></i> Inicio</h3></a>
</li>
<li><a  href="dashboard.php?p=<?php echo base64_encode('gestion_usuarios')?>"><h3 ><i class="fa fa-users fa-2x" aria-hidden="true"></i> Usuarios</h3></a></li>
<li><a href="#" onclick="openmodal('gestion_views','0')" ><h3 ><i class="fa fa-file-code-o fa-2x" aria-hidden="true"></i> Edita Views</h3></a></li>
<li><a  href="dashboard.php?p=<?php echo base64_encode('gestion_productos')?>"><h3><i class="fa fa-object-group fa-2x" aria-hidden="true"></i> Productos</h3></a></li>

<li><a   href="dashboard.php?p=<?php echo base64_encode('gestion_publicaciones')?>"><h3 ><i class="fa fa-newspaper-o fa-2x" aria-hidden="true"></i> Publicaciones</h3></a></li>
<li><a  href="dashboard.php?p=<?php echo base64_encode('gestion_publicaciones')?>"><h3 > <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i> Pedidos</h3></a></li>
<?php }
elseif ($_SESSION["id_rol"]==2) {//menu empleado
	?>
<li class="active-link">
   <a href="dashboard.php?p=<?php echo base64_encode('')?>" ><h3><i class="fa fa-home fa-2x" aria-hidden="true"></i> Inicio</h3></a>
 <li><a  href="dashboard.php?p=<?php echo base64_encode('gestion_productos')?>"><h3><i class="fa fa-object-group fa-2x" aria-hidden="true"></i> Productos</h3></a></li>

<li><a   href="dashboard.php?p=<?php echo base64_encode('gestion_publicaciones')?>"><h3 ><i class="fa fa-newspaper-o fa-2x" aria-hidden="true"></i> Publicaciones</h3></a></li>
<li><a  href="dashboard.php?p=<?php echo base64_encode('gestion_publicaciones')?>"><h3 > <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i> Pedidos</h3></a></li>
</li>


	<?php } 
elseif($_SESSION["id_rol"]==4){//expert 
	?>
	<li class="active-link">
   <a href="dashboard.php?p=<?php echo base64_encode('')?>" ><h3><i class="fa fa-home" aria-hidden="true"></i> Inicio</h3></a>
   <li><a onclick="openmodal('gestion_views','0')"><h3 ><i class="fa fa-file-o" aria-hidden="true"></i> Edita Views</h3></a></li>

   <li><a   href="dashboard.php?p=<?php echo base64_encode('gestion_publicaciones')?>"><h3 ><i class="fa fa-newspaper-o" aria-hidden="true"></i> Publicaciones</h3></a></li>
<?php } ?>