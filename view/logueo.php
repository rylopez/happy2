<div id="mimodal" class="modal-dialog modal-md" width="410" >     
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <img  id="imgmodal" src="recursos/logos/logo.png" class="img-responsive" alt="Cinque Terre" width="504" >
      <form action="../controller/usuarios.controller.php" method="POST" >
      <div id="loguear" class="row">
      <div class="col-sm-10 col-md-10 col-lg-10">
      
      <input placeholder="Correo Electronico" name="correo" class="form-control"  type="email" required id="email" onblur="validarEmail();"  id="miInput">
      <br>
      <input placeholder="Ingrese Contraseña" name="clave" class="form-control"  type="password" required>
      <br>
      <div class="col-sm-6 reg">
       <button  name="acc" value="l" class="btn btreg btn-info"><h2>Entrar</h2></button>
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
      function validarEmail(  ) {
  var email = $("input#email").val();
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) )
        alert("Error: La dirección de correo " + email + " es incorrecta.");
}

</script>