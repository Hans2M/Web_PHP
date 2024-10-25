<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["cantidad"]) && !empty($_POST["precio"]) && !empty($_POST["fecha"]) && !empty($_POST["modo_pago"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $cantidad = $_POST["cantidad"];
        $precio = $_POST["precio"];
        $fecha = $_POST["fecha"];
        $modo_pago = $_POST["modo_pago"];

        // Corrección en la consulta SQL (se elimina la coma antes de WHERE)
        $sql = $conexion->query("update productos set Nombre='$nombre', cantidad=$cantidad, precio='$precio', fecha='$fecha', modo_pago='$modo_pago' WHERE Id_producto=$id ");
        
        if ($sql == 1) {
            header("location:control_pedidos.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar producto</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>campos vacios</div>";
    }
}
?>
