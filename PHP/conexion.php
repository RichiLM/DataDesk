<?php

function conexion(){
    $servidor = 'localhost';
    $usuario = 'richidb';
    $password = 'admin11';
    $bd = 'datos';
    $conexion = mysqli_connect($servidor, $usuario, $password, $bd);
    return $conexion;
}

?>