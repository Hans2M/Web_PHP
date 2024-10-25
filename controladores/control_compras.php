<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["cantidad"]) and !empty($_POST["precio"]) and !empty($_POST["fecha"]) and !empty($_POST["modo_pago"])) {

        $nombre = $_POST["nombre"];
        $cantidad = $_POST["cantidad"];
        $precio = $_POST["precio"];
        $fecha = $_POST["fecha"];
        $modo_pago = $_POST["modo_pago"];

        $sql = $conexion->query(" insert into productos(Nombre, cantidad, precio, Fecha,modo_pago)values('$nombre','$cantidad', '$precio', '$fecha', '$modo_pago')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">compras registradas correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar compras</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
    }
}
