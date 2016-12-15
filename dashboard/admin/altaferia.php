

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<?php

 require 'bd.php';
    $servidor="localhost";
    $usuario="root";
    $contrasena="";
    $base_de_datos="evento";
    $mi_bd = new BD($servidor,$usuario,$contrasena,$base_de_datos);
    $mi_bd2 = new BD($servidor,$usuario,$contrasena,$base_de_datos);
    $mi_bd3 =new mysqli($servidor, $usuario, $contrasena, $base_de_datos);
    $mi_bd4 = new BD($servidor,$usuario,$contrasena,$base_de_datos);

     //insertar multiples filas

    $ISBN =  $_POST["ISBN"];
    $titulo= $_POST["titulo"];
    $clasificacion= $_POST["clasificacion"];
    $lugar=$_POST["lugar"]; 
    $categoria=$_POST["categoria"];
    $ubicacion=$_POST["ubicacion"];
    $ubicacionv=$_POST["ubicacionv"];
    $inicior=$_POST["inicior"];
    $finr=$_POST["finr"];
    $trabajo=$_POST["trabajo"];
    $pago=$_POST["pago"];
    $inicioe=$_POST["inicioe"];
    $fine=$_POST["fine"];
    $duracion=$_POST["duracion"];
    $costo=$_POST["costo"];
    $descuento=$_POST["descuento"];
    $minima=$_POST["minima"];
    $maxima=$_POST["maxima"];
    $area=$_POST["area"];







    $tabla="evento";
    $columnas= array("ISBN","titulo_e","lugar","clasificacion","ubicacion","ubicacion_v","FechIniReg","FechFinReg","costo","descuento","FechPago","FechIniEv","FechFinEv","duracion");
    $valores= array(array($ISBN,"'$titulo'","'$lugar'","'$clasificacion'","'$ubicacion'","'$ubicacionv'","'$inicior'","'$finr'","'$costo'","'$descuento'","'$pago'","'$inicioe'","'$fine'","'$duracion'"));
    $mi_bd->insertar($tabla, $columnas, $valores );
   echo $mi_bd->resultado(); //imprimir resultado de la operación
    
   
    
   
    
      if ($mi_bd->resultado()){
         $sql2="select id_evento from evento order by id_evento desc limit 1";
    
         $result = $mi_bd3->query($sql2);
         $row=mysqli_fetch_assoc($result);
         $resultado= $row["id_evento"];
        //echo $resultado;
         $tabla2="feria_ciencias";      
         $columnas2=array("id_evento","edadmin","edadMax");    
         $valores2=array(array($row["id_evento"],$minima,$maxima));   
         $mi_bd2->insertar($tabla2,$columnas2,$valores2);

         //se obtiene el ultimo id de la tabla feria_ciencias

         $sql3="select id_feriadc from feria_ciencias order by id_feriadc desc limit 1";
    
         $result2 = $mi_bd3->query($sql3);
         $row2=mysqli_fetch_assoc($result2);
         $resultado2= $row2["id_feriadc"];




         $tabla3="feria_areas";      
         $columnas3=array("id_feriadc","area");    
         $valores3=array(array($row2["id_feriadc"],"'$area'"));   
         $mi_bd4->insertar($tabla3,$columnas3,$valores3);
   
      //echo $mi_bd2->resultado();

       }
    

    
      


if ($mi_bd->resultado()||$mi_bd2->resultado()||$mi_bd4->resultado()) {
     
echo"
<div class='container'><div class='alert alert-success alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Se realizó con éxito el registro</div></div>";
header("Refresh:0; url=eventopage.html");
}else {
   echo"
</div class='container'><div class='alert alert-warning alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Ha habido un error</div></div>";
}
?>