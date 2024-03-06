<?php

require_once "conexion.php";
$conexion = conexion();
$id = $_POST['id'];
$n = $_POST['nombre'];
$m = $_POST['area'];
$o = $_POST['sexo'];
$p = $_POST['correo'];

$sql = "UPDATE Registros set nombre='$n',
                            area='$m',
                            sexo='$o',
                            correo='$p'

                            where id='$id'";
echo $result = mysqli_query($conexion, $sql);

?>