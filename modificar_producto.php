<?php
include "modelo/conexion.php";

$id = $_GET["id"];

$sql = $conexion->query("select * from productos where Id_producto=$id ");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar_producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form class="col-4 p-3 bg-warning m-auto" method="POST">
        <h3 class="text-center text-secondary">Modificar producto</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
        include "controladores/modificar_producto.php";

        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->Nombre ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">cantidad</label>
                <input type="text" class="form-control" name="cantidad" value="<?= $datos->cantidad ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">precio</label>
                <input type="text" class="form-control" name="precio" value="<?= $datos->precio ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">fecha</label>
                <input type="date" class="form-control" name="fecha " value="<?= $datos->fecha ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">modo de pago</label>
                <input type="text" class="form-control" name="modo_pago" value="<?= $datos->modo_pago ?>">
            </div>
        <?php }
        ?>


        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar </button>
    </form>

</body>

</html>