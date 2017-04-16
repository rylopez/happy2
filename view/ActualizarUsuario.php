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
  

  require_once("../model/db_conn.php");
  require_once("../model/usuarios.class.php");

 
  $usuario = Gestion_Usuarios::ReadbyId($ui);
 
?>
<div  class="modal-dialog modal-lg" width="410" >  

 
<div class="form-style-6">

 
  <form  name="form" action="../controller/usuarios.controller.php" method="POST" onsubmit="return funcion();">
        <h3 >Actualizar Usuario</h3>

       
        
          <select name="tipo_documento"  required data-toggle="tooltip"  title="Tipo de documento" >
            <option value="" disabled selected>Seleccione tipo de documento</option>
            <option value="CC" <?php if($usuario[3] == "CC"){ echo "selected"; } ?> >Cedula de Ciudadanía</option>
            <option value="TI" <?php if($usuario[3] == "TI"){ echo "selected"; } ?>>Tarjeta de Identidad</option>
            <option value="RC" <?php if($usuario[3] == "RC"){ echo "selected"; } ?> >Registro Civil</option>
            <option value="Pasaporte" <?php if($usuario[3] == "Pasaporte"){ echo "selected"; } ?> >Pasaporte</option>
          </select>

          <input value="<?php echo $usuario[4] ?>"  type="number" placeholder="Numero de Documento" name="numero_documento" class="validate" required data-toggle="tooltip"  title="Numero  de documento" onkeypress="return sn(event)"   />
              
            <input value="<?php echo $usuario[1] ?>"  type="text" placeholder="Nombres" name="nombre"  required data-toggle="tooltip"  title="Nombres" onkeypress="return sl(event)"   />
             
            
            <input value="<?php echo $usuario[2] ?>"  type="text" name="apellido" placeholder="Apellido" required  data-toggle="tooltip"  title="Apellidos" onkeypress="return sl(event)"  />
              
            
            <input value="<?php echo $usuario[8] ?>"  type="number" name="celular" placeholder="Número Celular"  required size="11" data-toggle="tooltip"  title="Numero Celular" onkeypress="return sn(event)"  />
          
            <input value="<?php echo $usuario[7] ?>"  type="number" name="telefono"  placeholder="Número telefofico" required size="10" data-toggle="tooltip"  title="Numero Telefonico" onkeypress="return sn(event)"   />
          
            
            <input value="<?php echo $usuario[9] ?>"  type="text" name="direccion"  placeholder="Dirección" required data-toggle="tooltip"  title="Direccion"/>
         
           
            <input value="<?php echo $usuario[10] ?>"  type="text" name="ciudad" placeholder="Ciudad de residencia" required  data-toggle="tooltip"  title="Ciudad de residencia" onkeypress="return sl(event)"  />
            
          
            
            <input value="<?php echo $usuario[5] ?>"  type="email" name="correo" placeholder="Correo electronico"  required data-toggle="tooltip"  title="Correo Electronico"/>
           
            
            <input value="<?php echo $usuario[6] ?>"  type="password" name="clave"  placeholder="Ingrese Contraseña" required data-toggle="tooltip"  title="Contraseña"/>
            
           
           
            
          
      
         
            <input value="<?php echo $usuario[11] ?>"  type="number" name="edad" placeholder="Edad" required data-toggle="tooltip"  title="Edad" onkeypress="return sn(event)"   />
           
         
           <select name="sexo"required data-toggle="tooltip"  title="Genero" >
            <option value="x" disabled selected>Seleccione Genero</option>
            <option value="Femenino"<?php if($usuario[12] == "FEMENINO"){ echo "selected"; } ?> >Femenino</option>
            <option value="Masculino" <?php if($usuario[12] == "MASCULINO"){ echo "selected"; } ?>>Masculino</option>
            <option value="otro" <?php if($usuario[12] == "otro"){ echo "selected"; } ?>>otro</option>
          </select>
            
        <?php   
    
          if ($_SESSION["id_rol"]==1) {?>
        
                <select    name="id_rol" placeholder="Rol Usuario" required data-toggle="tooltip"  title="Rol Usuario">
                    <option value="x" disabled selected>Seleccione el Rol</option>
                    <option value="1" <?php if($usuario[13] == "1"){ echo "selected"; } ?>>Administrador</option>
                    <option value="2" <?php if($usuario[13] == "2"){ echo "selected"; } ?>>Empleado</option>
                    <option value="3" <?php if($usuario[13] == "3"){ echo "selected"; } ?>>Cliente</option>
                    <option value="4" <?php if($usuario[13] == "4"){ echo "selected"; } ?>>Experto</option>                     
                </select>
                <input name="location"  value="dashboardadmin" type="hidden"/>
                <input type="hidden" name="estado" value="1">
                <input type="hidden" name="id_usuario" value="<?php echo $usuario[0] ?>" >
                <input type="hidden" name="autor" value="<?php echo ($_SESSION["nombre"])." ".($_SESSION["apellido"]); ?>">
               <br>
               <button class="guardar"   type="botton" name="acc" value="u">Guardar</button>
               <a  class=" btn cancelar" href="dashboard.php?p=<?php echo base64_encode("gestion_usuarios"); ?>">Cancelar</a>
        <?php }elseif (($_SESSION["id_rol"]==2)|| ($_SESSION["id_rol"]==4)){  ?>
               <select    name="id_rol" placeholder="Rol Usuario" required data-toggle="tooltip"  title="Rol Usuario">
                    <option value="x" disabled selected>Seleccione el Rol</option>
                 
                    <option value="2" <?php if($usuario[13] == "2"){ echo "selected"; } ?>>Empleado</option>
                    <option value="3" <?php if($usuario[13] == "3"){ echo "selected"; } ?>>Cliente</option>
                    <option value="4" <?php if($usuario[13] == "4"){ echo "selected"; } ?>>Experto</option>                     
                </select>
                <input name="location"  value="dashboard" type="hidden"/>
                <input type="hidden" name="estado" value="1">
                <input type="hidden" name="id_usuario" value="<?php echo $usuario[0] ?>" >
                <input type="hidden" name="autor" value="<?php echo ($_SESSION["nombre"])." ".($_SESSION["apellido"]); ?>">
               <br>
               <button class="guardar"   type="botton" name="acc" value="u">Guardar</button>
               <a  class=" btn cancelar" href="dashboard.php?p=<?php echo base64_encode(""); ?>">Cancelar</a>
              <?php }else{  ?>
               <select    name="id_rol" placeholder="Rol Usuario" required data-toggle="tooltip"  title="Rol Usuario">
                    <option value="x" disabled selected>Seleccione el Rol</option>
                 
                  
                    <option value="3" <?php if($usuario[13] == "3"){ echo "selected"; } ?>>Cliente</option>
                                      
                </select>
                <input name="location"  value="index" type="hidden"/>
                <input type="hidden" name="estado" value="1">
                <input type="hidden" name="id_usuario" value="<?php echo $usuario[0] ?>" >
                <input type="hidden" name="autor" value="<?php echo ($_SESSION["nombre"])." ".($_SESSION["apellido"]); ?>">
               <br>
               <button class="guardar"   type="botton" name="acc" value="u">Guardar</button>
               <a  class=" btn cancelar" href="index.php?p=<?php echo base64_encode(""); ?>">Cancelar</a>
 
          <?php } ?>
  </form>
  </div>
 
  </div>
