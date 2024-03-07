<?php
require_once '../PHP/conexion.php';
$conexion = conexion();
?>

<div class="row">
    <div class="col-sm-12">
        <h2 class="text-center mb-4 text-light">Usuarios registrados</h2>
        <table class="table table-hover table-condensed table-border">
            <caption>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                    Agregar
                </button>
            </caption>
            <tr>
                <td>Nombre</td>
                <td>Area</td>
                <td>Sexo</td>
                <td>Correo</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            <?php
            $sql = "SELECT id, nombre, sexo, area, correo FROM registros";
            $result = mysqli_query($conexion, $sql);
            while ($ver = mysqli_fetch_row($result)) {
                $datos = $ver[0] . '||' . $ver[1] . '||' . $ver[2] . '||' . $ver[3] . '||' . $ver[4];
            ?>
                <tr>
                    <td><?php echo $ver[1]; ?></td>
                    <td><?php echo $ver[2]; ?></td>
                    <td><?php echo $ver[3]; ?></td>
                    <td><?php echo $ver[4]; ?></td>
                    <td>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#modalCambio" onclick="agregaform('<?php echo $datos ?>')">Editar</button>
                    </td>
                    <td>
                        <button class="btn btn-danger" onclick="preguntarSiNo('<?php echo $ver[0]; ?>')">Eliminar</button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>