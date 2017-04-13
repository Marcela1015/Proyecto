<?php

  require("conexion.php");
  $username = $_POST['user'];
  $password = $_POST['pass'];

  $query=" SELECT * FROM login WHERE user = '".$username."' and  pass = '".$password."'";
  $resultado=mysqli_query($link,$query) or die ("Error en query: ". mysqli_error());

  if (mysqli_num_rows($resultado) > 0)
  {
    echo "bienvenido" . "\n" . $username ;
  }
  else
  {
    echo "Error datos invalidos";
  }
  mysqli_close($link);


?>
