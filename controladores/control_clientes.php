<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["telefono"]) and !empty($_POST["correo"]) and !empty($_POST["fecha"])) {

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $fecha = $_POST["fecha"];

        $sql = $conexion->query(" insert into clientes(Nombre, Apellidos, Telefono, Correo, Fecha_Inscrito)values('$nombre','$apellido', '$telefono', '$correo', '$fecha')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrarte</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
    }
}
