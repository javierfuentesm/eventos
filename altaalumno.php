
<<<<<<< HEAD

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
=======
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

>>>>>>> origin/master
<?php

 require 'bd.php';
    $servidor="localhost";
    $usuario="root";
    $contrasena="";
    $base_de_datos="evento";
    $mi_bd = new BD($servidor,$usuario,$contrasena,$base_de_datos);
<<<<<<< HEAD
    $mi_bd2 = new BD($servidor,$usuario,$contrasena,$base_de_datos);
    $mi_bd3 =new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

=======
>>>>>>> origin/master

     //insertar multiples filas

    $nombre =  $_POST["nombrea"];
    $apellidoP= $_POST["apa"];
    $apellidoM= $_POST["ama"];
    $edad=$_POST["edada"]; 
    $CP=$_POST["cpa"]; 
    $email=$_POST["emaila"];
    $tel=$_POST["tela"];
    $cel=$_POST["cela"];
    $boleta=$_POST["boleta"];
    $escuela=$_POST["escuela"];
    $interes=$_POST["op1"];
    $contrasena=$_POST["password"];
    $direccion=$_POST["direccion"];

<<<<<<< HEAD


    $tabla="participante";
    $columnas= array("password","nombre","apellidoP","apellidoM","edad","tel","direccion","CP","cel","email");
    $valores= array(array("'$contrasena'","'$nombre'","'$apellidoP'","'$apellidoM'",$edad,"'$tel'","'$direccion'",$CP,"'$cel'","'$email'"));
    $mi_bd->insertar($tabla, $columnas, $valores );
   //echo $mi_bd->resultado(); //imprimir resultado de la 


      if ($mi_bd->resultado()){

     $sql2="select id_part from participante order by id_part desc limit 1";    
     $result = $mi_bd3->query($sql2);
     $row=mysqli_fetch_assoc($result);
     $resultado= $row["id_part"];
    $tabla2="alumno";
    $columnas2=array("id_part","boleta","escuela","interes");
    $valores2=array(array($resultado,"'$boleta'","'escuela'","'interes'"));
    $mi_bd2->insertar($tabla2,$columnas2,$valores2);
     
  }

     if ($mi_bd->resultado()||$mi_bd2->resultado()) {
     
echo"
<div class='container'><div class='alert alert-success alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Se realizaó con éxito el registro</div></div>";
 header("Refresh:0; url=index.html");
}else {
   echo"
<div class='container'><div class='alert alert-warning alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Ha habido un error</div></div>";
=======
    echo $nombre;
    

    $tabla="participante";
    $columnas= array("id_part","contrasena","nombre","apellidoP","apellidoM","edad","tel","direccion","CP","cel","email");
    $valores= array(array(1,"'$contrasena'","'$nombre'","'$apellidoP'","'$apellidoM'",$edad,"'$tel'","'$direccion'",$CP,"'$cel'","'$email'"));
    $mi_bd->insertar($tabla, $columnas, $valores );
    echo $mi_bd->resultado(); //imprimir resultado de la operación


     if ($mi_bd == false) {
$result='<div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
</div>';
}else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
>>>>>>> origin/master
}
?>