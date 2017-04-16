<?php
    session_start();
   $correo=$_POST["correo"];
   $nombre=$_POST["nombre"];
   $mensaje=$_POST["mensaje"];
   $mensaje = str_replace("\n.", "\n..", $mensaje);
   $mensaje = wordwrap($mensaje, 70, "\r\n");
   $para      = 'yoha116nny@gmail.com';
   $titulo    = $nombre;
  
    $cabeceras = 'From:'.$correo.' ' . "\r\n" .
    'Reply-To:'.$correo.' ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
$msn= base64_encode("Gracias ".$nombre ." por  enviarnos sus opiniones, muy pronto nos pondremos en contacto  con usted para resolver sus dudas");  
$tipom=base64_encode("success");
header("location: ../view/index.php?p=".base64_encode(""));


?>