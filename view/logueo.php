<div id="mimodal" class="modal-dialog modal-md" width="410" >     
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <img  id="imgmodal" src="recursos/logos/logo.png" class="img-responsive" alt="Cinque Terre" width="504" >
      <form  name="form" action="../controller/usuarios.controller.php" method="POST" onsubmit="return funcion();" >
      <div id="loguear" class="row">
      <div class="col-sm-10 col-md-10 col-lg-10">
      
      <input placeholder="Correo Electronico" name="correo" class="form-control"  type="" required id="email" >
      <br>
      <input placeholder="Ingrese Contraseña" name="clave" class="form-control"  type="password" required>
      <br>
      <div class="col-sm-6 reg">
       <button  name="acc" value="l" class="btn btreg btn-info" ><h2>Entrar</h2></button>
       </div>
       <div class="col-sm-6 reg">
       <a  href="#" onclick="openmodal('nuevo_usuario','0')"><h2>Registrate</h2></a>
       <br>
       </div>
      </div>
      </div>
      </form>
</div>
<script type="text/javascript">


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