<?php
   class conexion1{
   function recuperarDatos()  
   {  
      session_start();
      $host = "localhost";
      $user = "root";
      $pw = "";
      $db = "evento";

      $con = mysql_connect($host, $user, $pw) or die ("No se pudo conectar a la base de datos");
      mysql_select_db($db, $con) or die ("No se encontro la base de datos");

      $query = "SELECT * FROM organizador where email='" . $_SESSION['email'] . "'";
    $resultado = mysql_query($query);

    while($fila = mysql_fetch_array($resultado)) {
       echo "" . $fila['id_organizador'] . "<br>";
    }
   }
   }  
?>  