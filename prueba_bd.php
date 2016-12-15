<?php
    //incluir el archivo que contiene a la clase
    require 'bd.php';

    //Crear conexión
    $servidor="localhost";
    $usuario="root";
    $contrasena="brown";
    $base_de_datos="prueba";
    $mi_bd = new BD($servidor,$usuario,$contrasena,$base_de_datos);
    echo $mi_bd->resultado(); //imprimir resultado de la operación

    echo "<br/>";


    //insertar multiples filas
    $tabla = "tabla";
    $columnas = array("id","nombre");
    $valores = array(array("3",'"Luis"'));
    $mi_bd->insertar($tabla, $columnas, $valores );
    echo $mi_bd->resultado(); //imprimir resultado de la operación

    echo "<br/>";

    //eliminar fila
    $tabla = "tabla";
    $columnas_condicion = array("id","nombre");
    $valores_condicion = array("3",'"Luis"');
    $mi_bd->eliminar($tabla, $columnas_condicion, $valores_condicion );
    echo $mi_bd->resultado();//imprimir resultado de la operación

    echo "<br/>";

    //actualizar fila
    $tabla = "tabla";
    $columnas = array("id","nombre");
    $valores = array("5",'"Sandra"');
    $columnas_condicion = array("id","nombre");
    $valores_condicion = array("4",'"Carlos"');
    $mi_bd->actualizar($tabla, $columnas, $valores, $columnas_condicion, $valores_condicion );
    echo $mi_bd->resultado(); //imprimir resultado de la operación
    echo "<br/>";

    //consultar datos
    $tabla = "tabla";
    $columnas = array("id","nombre");
    $columnas_condicion = array("id");
    $valores_condicion = array("4");
    $tabla_resultado=$mi_bd->consultar($tabla, $columnas, $columnas_condicion, $valores_condicion );
    echo $mi_bd->resultado(); //imprimir resultado de la operación
/*
dfdfdf
*/

?
