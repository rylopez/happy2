<script type="text/javascript">
  
$('[data-toggle="tooltip"]').tooltip(); 
function sl(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}
function sn(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " 0123456789";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}
function funcion(){
  var regexp = /^[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+$/;

if((regexp.test(document.form.correo.value) == 0) || (document.form.correo.value.length = 0)){
alert("Introduzca una dirección de email válida");
document.form.correo.focus();
return false;
} else {
return true;
}



} 


</script>
<?php


    
        if(!isset($_SESSION["id_usuario"])){
         $titulo="Registrate";  
            }else{
         $titulo="Nuevo Usuario";
         } 
           
        
?>
<div  class="modal-dialog modal-lg" width="410" >  

 
<div class="form-style-6">

 
  <form name="form"  action="../controller/usuarios.controller.php"  method="POST" onsubmit="return funcion();">
        <h3 ><?php echo $titulo ?></h3>
        

        
          
          <select name="tipo_documento"  required data-toggle="tooltip" title="Tipo De Documento" >
            <option value="x" disabled selected>Seleccione tipo de documento</option>
            <option value="CC">Cedula de Ciudadanía</option>
            <option value="TI">Tarjeta de Identidad</option>
            <option value="RC">Registro Civil</option>
            <option value="Pasaporte">Pasaporte</option>
          </select>

          <input type="number" placeholder="Numero de Documento" name="numero_documento" class="validate" required data-toggle="tooltip" title="Numero de Documento"  onkeypress="return sn(event)"/>
              
            <input type="text" placeholder="Nombres" name="nombre"  required data-toggle="tooltip"  title="Nombres" onkeypress="return sl(event)"/>
             
            
            <input type="text" name="apellido" placeholder="Apellido" required data-toggle="tooltip"  title="Titulo" onkeypress="return sl(event)" />
              
            
            <input type="number" name="celular" placeholder="Número Celular"  required size="11" data-toggle="tooltip"  title="Numero Celular" onkeypress="return sn(event)" />
          
            <input type="number" name="telefono"  placeholder="Número telefofico" required size="10" data-toggle="tooltip"  title="Numero Telefonico" onkeypress="return sn(event)" />
          
            
            <input type="text" name="direccion"  placeholder="Dirección" required data-toggle="tooltip"  title="Direccion" />
         
           
            <input type="text" name="ciudad" placeholder="Ciudad de residencia" required data-toggle="tooltip"  title="Ciudad" onkeypress="return sl(event)" / >
            
          
            
            <input type="email" name="correo" placeholder="Correo electronico"  required data-toggle="tooltip"  title="Correo Electronico" />
           
            
            <input type="password" name="clave1"  placeholder="Ingrese Contraseña" required data-toggle="tooltip"  title="Contraseña" />      
           
            
          
      
         
            <input type="number" name="edad" placeholder="Edad" required data-toggle="tooltip"  title="Edad" onkeypress="return sn(event)" />
           
         
           <select name="sexo" required data-toggle="tooltip"  title="Sexo" >
            <option value="x" disabled selected>Seleccione Genero</option>
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
            <option value="otro">otro</option>
          </select>
            
        <?php


    
        if(!isset($_SESSION["id_usuario"])){ ?>
        <input name="id_rol"  value="3" type="hidden" />
        <input name="location"  value="index" type="hidden" />
          
        <?php    }else{ 
          if ($_SESSION["id_rol"]==1) {?>
        
                <select    name="id_rol" placeholder="Rol Usuario" required data-toggle="tooltip"  title="Rol usuario" >
                    <option value="x" disabled selected>Seleccione el Rol</option>
                    <option value="1">Administrador</option>
                    <option value="2">Empleado</option>
                    <option value="3">Cliente</option>
                    <option value="4" >Experto</option>                     
                </select>
         <input name="location"  value="dashboardadmin" type="hidden"/>
        <?php }else{  ?>
           
                <select    name="id_rol" required placeholder="Rol Usuario" data-toggle="tooltip"  title="Rol Usuario" >
                    <option value="" disabled selected>Seleccione el Rol</option>
                    <option value="2">Empleado</option>
                    <option value="3">Cliente</option>                    
                </select>
                <input name="location"  value="dashboard" type="hidden"/>
            
      <?php } } ?>
      
      
      <input type="hidden" name="acc" value="c">
      <input type="hidden" name="estado" value="1">
      <input type="hidden" name="autor" value="<?php echo ($_SESSION["nombre"])." ".($_SESSION["apellido"]); ?>">



      <br>
      <button class="guardar"   type="submit">Guardar</button>
            <?php

      if(!isset($_SESSION["id_usuario"])){
                 
      ?>
      <a  class="btn cancelar" href="index.php">Cancelar</a>   
      <?php 
       }else {
         if ($_SESSION["id_rol"]==1 ) {  
      ?>
      
      <a  class=" btn cancelar" href="dashboard.php?p=<?php echo base64_encode("gestion_usuarios"); ?>">Cancelar</a>
      <?php 
       }else{?>
       <a  class=" btn cancelar" href="dashboard.php">Cancelar</a>

       <?php }}
      ?>
            

     

          
  </form>
 
 
  </div>
  </div>
