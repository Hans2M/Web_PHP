<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <script src="https://kit.fontawesome.com/edb9ca239a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center p-3 bg-warning">Fruteria</h1>
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="index.php" class="fa-solid fa-store"><i class="fa-solid fa-store"></i>Tienda</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="compras.php"><i class="fa-solid fa-cart-shopping"></i>Compras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="pedidos.php"><i class="fa-solid fa-person"></i>Pedidos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="contacto.php"><i class="fa-solid fa-phone"></i> Contacto</a>
        </li>
    </ul>

    <?php
    include "modelo/conexion.php";
    include "controladores/eliminar_producto.php";
    ?>
    
    <center><div class="col-8 p-4">
        <table class="table">
            <thead class="bg-info">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">cantidad</th>
                    <th scope="col">precio</th>
                    <th scope="col">fecha</th>
                    <th scope="col">Modo de pago</th>
                    <th scope="col"></th>
                </tr>
            </thead></center>
            <tbody>
                <?php
                include "modelo/conexion.php";
                $sql = $conexion->query(" select * from productos ");
                while ($datos = $sql->fetch_object()) { ?>
                    <tr>
                        <td><?= $datos->Nombre ?></td>
                        <td><?= $datos->cantidad ?></td>
                        <td><?= $datos->precio ?></td>
                        <td><?= $datos->fecha ?></td>
                        <td><?= $datos->modo_pago ?></td>

                        <td>
                        <a onclick="return eliminar()" href="pedidos.php?id=<?= $datos->Id_producto?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>