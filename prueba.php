<?php

switch ($_POST["pag"]) {
  case 'google':
    $codigo =  $_POST["uid"];
    include('google.php');
  break;

  case 'facebook':
    echo "<h1>EsTOY EN facebook</h1>";
  break;

}


?>
