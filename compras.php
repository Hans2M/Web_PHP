<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
    <script src="https://kit.fontawesome.com/edb9ca239a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center p-3 bg-warning">Compras</h1>

    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="index.php" class="fa-solid fa-store"><i class="fa-solid fa-store"></i>Tienda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="compras.php"><i class="fa-solid fa-cart-shopping"></i>Compras</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="pedidos.php"><i class="fa-solid fa-person"></i>Pedidos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="contacto.php"><i class="fa-solid fa-phone"></i> Contacto</a>
        </li>
    </ul>
    <script>
        function eliminar() {
            var respuesta = confirm("Estas seguro de eliminar");
            return respuesta
        }
    </script>
    <?php
    include "modelo/conexion.php";
    include "controladores/control_compras.php";
    include "controladores/eliminar_producto.php";
    ?>
    <center>
        <div class="container-fluid row container-center">
            <center>
                <form class="col-4 p-3" method="POST">
                    <h3 class="text-center text-secondary">Registro de Compras</h3>
                    <?php

                    ?>
                    <center>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre de la fruta</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                    </center>
                    <center>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">cantidad</label>
                            <input type="text" class="form-control" name="cantidad">
                        </div>
                    </center>
                    <center>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">precio</label>
                            <input type="text" class="form-control" name="precio">
                        </div>
                    </center>
                    <center>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Fecha de la compra</label>
                            <input type="date" class="form-control" name="fecha">
                        </div>
                    </center>
                    <center>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Modo de pago</label>
                            <input type="text" class="form-control" name="modo_pago">
                        </div>
                    </center>

                    <center><button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar compra</button></center>
                </form>
            </center>

        </div>
    </center>


</body>

</html>