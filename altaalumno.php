
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php

 require 'bd.php';
    $servidor="localhost";
    $usuario="root";
    $contrasena="";
    $base_de_datos="evento";
    $mi_bd = new BD($servidor,$usuario,$contrasena,$base_de_datos);

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
}
?>