<?php

if (!empty($_GET["id"])) {
    # code...
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from clientes where Id_cliente=$id ");
    if ($sql==1) {
        # code...
        echo '<div class="alert alert-success">usuario eliminado correctamente</div>';
    }else{
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
}


?>