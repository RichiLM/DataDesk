<?php

function conexion(){
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $bd = 'datos';
    $conexion = mysqli_connect($servidor, $usuario, $password, $bd);
    return $conexion;
}

?>