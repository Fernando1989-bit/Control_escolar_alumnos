<?php

   $user = $_GET['user'];

   $password = $_GET['password'];

 

   if (($user == "Maestria") AND ($password == "12345")) {

     
	   include ("principal.html");

   } else {

      echo "¡Usuario o contraseña incorrectos!";

      echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';

   }

?>
