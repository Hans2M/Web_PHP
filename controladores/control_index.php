<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["Manzana"]) and !empty($_POST["precio"])) {

        $nombre = $_POST["Manzana"];
        $precio = $_POST["precio"];

        $sql = $conexion->query(" insert into productos(Nombre, precio)values('$nombre', '$precio')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">compras registradas correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar compras</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
    }
}
