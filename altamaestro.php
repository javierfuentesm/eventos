

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

     //insertar multiples filas

    $nombre =  $_POST["nombrem"];
    $apellidoP= $_POST["apm"];
    $apellidoM= $_POST["amm"];
    $edad=$_POST["edadm"]; 
    $CP=$_POST["cpm"]; 
    $email=$_POST["emailm"];
    $tel=$_POST["telm"];
    $cel=$_POST["celm"];
    $numempleado=$_POST["numempleado"];
    $escuela=$_POST["escuelam"];
    $especialidad2=$_POST["especialidad"];
    $interes=$_POST["interesm"];
    $contrasena=$_POST["passm"];
    $direccion=$_POST["direccionm"];






    $tabla="participante";
    $columnas= array("password","nombre","apellidoP","apellidoM","edad","tel","direccion","CP","cel","email");
    $valores= array(array("'$contrasena'","'$nombre'","'$apellidoP'","'$apellidoM'",$edad,"'$tel'","'$direccion'",$CP,"'$cel'","'$email'"));
    $mi_bd->insertar($tabla, $columnas, $valores );
   echo $mi_bd->resultado(); //imprimir resultado de la operación
    
   
    
   
    
      if ($mi_bd->resultado()){
         $sql2="select id_part from participante order by id_part desc limit 1";
    
         $result = $mi_bd3->query($sql2);
         $row=mysqli_fetch_assoc($result);
         $resultado= $row["id_part"];
        //echo $resultado;
         $tabla2="maestro";      
         $columnas2=array("id_part","num_empleado","escuela","interes","especialidad");    
         $valores2=array(array($row["id_part"],$numempleado,"'$escuela'","'$interes'","'$especialidad2'"));   
         $mi_bd2->insertar($tabla2,$columnas2,$valores2);
   
      //echo $mi_bd2->resultado();

       }
    

    
      


if ($mi_bd->resultado()||$mi_bd2->resultado()) {
     
echo"
<div class='container'><div class='alert alert-success alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Se realizó con éxito el registro</div></div>";
header("Refresh:0; url=index.html");
}else {
   echo"
</div class='container'><div class='alert alert-warning alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Ha habido un error</div></div>";
}
?>