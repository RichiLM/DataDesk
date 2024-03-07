<?php
require_once 'conexion.php';
$conexion = conexion();
$name = $_POST["usuario"];
$pssw = $_POST["contra"];
$hash_contrasena = password_hash($pssw, PASSWORD_DEFAULT);

if (isset($_POST['crearC'])) {
    $sql = "INSERT INTO usuarios (nombre_usuario, contrasena) VALUES ('$name', '$hash_contrasena')";
    mysqli_query($conexion, $sql);

    header("Location: ../index.php");
}
?>