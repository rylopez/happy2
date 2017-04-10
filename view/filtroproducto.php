<?php
 require_once("../model/db_conn.php");
 require_once("../model/productos.class.php");

$options="";
if ($_POST["elegido"]=="salud sexual") {
	$id_tipoproducto=1;

	$productos= Gestion_Productos::Readbytipo($id_tipoproducto);
	echo "<h4>PRODUCTOS  DE TIPO SALUD SEXUAL </h4>";
	if (!isset($productos)) {
		echo "<h2> NO SE ENCONTRARON RESULTADOS DE LA BUSQUEDA </h2>";
	}
       foreach ($productos as $row) {



       
       print_r("<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='index.php?p=". base64_encode('comprar')."&ui=".base64_encode($row['id_producto'])."'>
              <div class='hover-text'>
                <h4>".$row['nombre']."</h4>
                <p>Costo: $".$row['valor_venta']."</p>
                 <p>Descuento:".$row['descuento']."%</p>
              </div>
              <img src='".$row['url_foto1']."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
          <a href='index.php?p=".base64_encode('comprar')."&ui=".base64_encode($row['id_producto'])."' class= 'btn guardar'><h4>Comprar</h4></a>
          <a  href='#' onclick=openmodal('detalle_producto','".$row['id_producto']."') &quot;  class='btn cancelar'><h4>Ver Detalle</h4></a>
          
 
        </div>");
         }  

          
    
}
elseif ($_POST["elegido"]=="lenceria") {
   $id_tipoproducto=2;

	$productos= Gestion_Productos::Readbytipo($id_tipoproducto);
	echo "<h4>PRODUCTOS  DE TIPO LENCERIA </h4>";
	if (!isset($productos)) {
		echo "<h2> NO SE ENCONTRARON RESULTADOS DE LA BUSQUEDA </h2>";
	}
       foreach ($productos as $row) {



       
       print_r("<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='index.php?p=". base64_encode('comprar')."&ui=".base64_encode($row['id_producto'])."'>
              <div class='hover-text'>
                <h4>".$row['nombre']."</h4>
                <p>Costo: $".$row['valor_venta']."</p>
                 <p>Descuento:".$row['descuento']."%</p>
              </div>
              <img src='".$row['url_foto1']."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
          <a href='index.php?p=".base64_encode('comprar')."&ui=".base64_encode($row['id_producto'])."' class= 'btn guardar'><h4>Comprar</h4></a>
          <a  href='#' onclick=openmodal('detalle_producto','".$row['id_producto']."') &quot;  class='btn cancelar'><h4>Ver Detalle</h4></a>
          
 
        </div>");
         }  
 
}
elseif ($_POST["elegido"]=="Juguetes") {
    $id_tipoproducto=3;

	$productos= Gestion_Productos::Readbytipo($id_tipoproducto);

	echo "<h4>PRODUCTOS  DE TIPO JUGUETES SEXUALES</h4>";
	if (!isset($productos)) {
		echo "<h2> NO SE ENCONTRARON RESULTADOS DE LA BUSQUEDA </h2>";
	}
       foreach ($productos as $row) {



       
       print_r("<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='index.php?p=". base64_encode('comprar')."&ui=".base64_encode($row['id_producto'])."'>
              <div class='hover-text'>
                <h4>".$row['nombre']."</h4>
                <p>Costo: $".$row['valor_venta']."</p>
                 <p>Descuento:".$row['descuento']."%</p>
              </div>
              <img src='".$row['url_foto1']."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
          <a href='index.php?p=".base64_encode('comprar')."&ui=".base64_encode($row['id_producto'])."' class= 'btn guardar'><h4>Comprar</h4></a>
          <a  href='#' onclick=openmodal('detalle_producto','".$row['id_producto']."') &quot;  class='btn cancelar'><h4>Ver Detalle</h4></a>
          
 
        </div>");
         }  
   
}
elseif ($_POST["elegido"]=="estimulantes") {
   $id_tipoproducto=4;

	$productos= Gestion_Productos::Readbytipo($id_tipoproducto);
	echo "<h4>PRODUCTOS DE TIPO ESTIMULANTES</h4>";
	if (!isset($productos)) {
		echo "<h2> NO SE ENCONTRARON RESULTADOS DE LA BUSQUEDA </h2>";
	}
       foreach ($productos as $row) {



       
       print_r("<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='index.php?p=". base64_encode('comprar')."&ui=".base64_encode($row['id_producto'])."'>
              <div class='hover-text'>
                <h4>".$row['nombre']."</h4>
                <p>Costo: $".$row['valor_venta']."</p>
                 <p>Descuento:".$row['descuento']."%</p>
              </div>
              <img src='".$row['url_foto1']."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
          <a href='index.php?p=".base64_encode('comprar')."&ui=".base64_encode($row['id_producto'])."' class= 'btn guardar'><h4>Comprar</h4></a>
          <a  href='#' onclick=openmodal('detalle_producto','".$row['id_producto']."') &quot;  class='btn cancelar'><h4>Ver Detalle</h4></a>
          
 
        </div>");
         }  
  
}
elseif ($_POST["elegido"]=="Hombre") {
    $sexo="hombre";

	$productos= Gestion_Productos::Readbysexo($sexo);
	echo "<h4>PRODUCTOS PARA HOMBRES</h4>";
	if (!isset($productos)) {
		echo "<h2> NO SE ENCONTRARON RESULTADOS DE LA BUSQUEDA </h2>";
	}
       foreach ($productos as $row) {



       
       print_r("<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='index.php?p=". base64_encode('comprar')."&ui=".base64_encode($row['id_producto'])."'>
              <div class='hover-text'>
                <h4>".$row['nombre']."</h4>
                <p>Costo: $".$row['valor_venta']."</p>
                 <p>Descuento:".$row['descuento']."%</p>
              </div>
              <img src='".$row['url_foto1']."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
          <a href='index.php?p=".base64_encode('comprar')."&ui=".base64_encode($row['id_producto'])."' class= 'btn guardar'><h4>Comprar</h4></a>
          <a  href='#' onclick=openmodal('detalle_producto','".$row['id_producto']."') &quot;  class='btn cancelar'><h4>Ver Detalle</h4></a>
          
 
        </div>");
         }
     }
elseif ($_POST["elegido"]=="Mujer") {
     $sexo="mujer";

	$productos= Gestion_Productos::Readbysexo($sexo);
	echo "<h4>PRODUCTOS PARA MUJERES</h4>";
	if (!isset($productos)) {
		echo "<h2> NO SE ENCONTRARON RESULTADOS DE LA BUSQUEDA </h2>";
	}
       foreach ($productos as $row) {



       
       print_r("<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='index.php?p=". base64_encode('comprar')."&ui=".base64_encode($row['id_producto'])."'>
              <div class='hover-text'>
                <h4>".$row['nombre']."</h4>
                <p>Costo: $".$row['valor_venta']."</p>
                 <p>Descuento:".$row['descuento']."%</p>
              </div>
              <img src='".$row['url_foto1']."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
          <a href='index.php?p=".base64_encode('comprar')."&ui=".base64_encode($row['id_producto'])."' class= 'btn guardar'><h4>Comprar</h4></a>
          <a  href='#' onclick=openmodal('detalle_producto','".$row['id_producto']."') &quot;  class='btn cancelar'><h4>Ver Detalle</h4></a>
          
 
        </div>");
         }
}else{

	 $var=$_POST["elegido"];
	 $like="%".$var."%";


	echo "<h4>RESULTADOS DE SU BUSQUEDA... </h4>";
	
	$productos= Gestion_Productos::Readbylike($like);
	if (!isset($productos)) {
		echo "<h2> NO SE ENCONTRARON RESULTADOS DE LA BUSQUEDA </h2>";
	}
       foreach ($productos as $row) {



       
       print_r("<div class='col-xs-8 col-sm-6 col-md-4 col-lg-4' style='margin-top:2%;'>
          <div class='portfolio-item'>
            <div class='hover-bg'> <a href='index.php?p=". base64_encode('comprar')."&ui=".base64_encode($row['id_producto'])."'>
              <div class='hover-text'>
                <h4>".$row['nombre']."</h4>
                <p>Costo: $".$row['valor_venta']."</p>
                 <p>Descuento:".$row['descuento']."%</p>
              </div>
              <img src='".$row['url_foto1']."' class='img-responsive' alt='Project Title'> </a> </div>
          </div>
          <a href='index.php?p=".base64_encode('comprar')."&ui=".base64_encode($row['id_producto'])."' class= 'btn guardar'><h4>Comprar</h4></a>
          <a  href='#' onclick=openmodal('detalle_producto','".$row['id_producto']."') &quot;  class='btn cancelar'><h4>Ver Detalle</h4></a>
          
 
        </div>");
         }
}

   
?>