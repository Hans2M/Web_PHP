<?php

if (!empty($_GET["id"])) {
    # code...
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from productos where Id_producto=$id ");
    if ($sql==1) {
        # code...
        echo '<div class="alert alert-success">producto eliminado correctamente</div>';
    }else{
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
}


?>