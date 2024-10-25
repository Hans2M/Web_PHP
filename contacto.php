<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
    <script src="https://kit.fontawesome.com/edb9ca239a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center p-3 bg-warning">Registrarse</h1>
    <ul class="nav nav-pills nav-fill mb-3">
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="index.php" class="fa-solid fa-store"><i class="fa-solid fa-store"></i>Tienda</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="compras.php"><i class="fa-solid fa-cart-shopping"></i>Compras</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="pedidos.php"><i class="fa-solid fa-person"></i>Pedidos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="contacto.php"><i class="fa-solid fa-phone"></i> Contacto</a>
        </li>
    </ul>

    <?php
    include "modelo/conexion.php";
    include "controladores/control_clientes.php";
    ?>

    <center>
        <div class="container-fluid row container-center">
            <center>
                <form class="col-4 p-3" method="POST">

                    <center>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                    </center>
                    <center>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="apellido">
                        </div>
                    </center>
                    <center>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Telefono</label>
                            <input type="text" class="form-control" name="telefono">
                        </div>
                    </center>
                    <center>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">correo</label>
                            <input type="text" class="form-control" name="correo">
                        </div>
                    </center>
                    <center>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Fecha de Registro</label>
                            <input type="date" class="form-control" name="fecha">
                        </div>
                    </center>

                    <center><a class="nav-link" href="index.php"><button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button></a></center>
                </form>
            </center>

        </div>
    </center>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>