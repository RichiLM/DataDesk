<?php

require_once 'conexion.php';

$conexion = conexion();

$n = $_POST["nombre"];
$a = $_POST["area"];
$s = $_POST["sexo"];
$c = $_POST["correo"];

$sql = "INSERT INTO registros (nombre, area, sexo, correo) VALUES ('$n', '$a', '$s', '$c')";

echo $result = mysqli_query($conexion, $sql);

?>