<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutería</title>
    <script src="https://kit.fontawesome.com/edb9ca239a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
    <div class="overlay"></div> <!-- Capa de opacidad -->
    <!-- Encabezado -->
    <h1 class="text-center p-3 bg-warning text-dark">Frutería</h1>

    <!-- Menú de navegación -->

    <ul class="nav nav-pills nav-fill mb-3">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php" class="fa-solid fa-store"><i class="fa-solid fa-store"></i>Tienda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="compras.php"><i class="fa-solid fa-cart-shopping"></i>Compras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pedidos.php"><i class="fa-solid fa-person"></i>Pedidos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contacto.php"><i class="fa-solid fa-phone"></i> Contacto</a>
        </li>
    </ul>
    <?php
    include "modelo/conexion.php";
    include "controladores/control_compras.php";
    include "controladores/eliminar_producto.php";
    include "controladores/control_index.php";
    ?>

    <!-- Sección de productos -->
    <div class="container">
        <h2 class="text-center mb-4"></h2>
        <div class="row">
            <!-- Tarjeta de ejemplo de fruta 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="img/Manzana.jpg" class="fa-brands fa-apple" alt="Manzana">

                    <div class="card-body">
                        <h5 class="card-title">Manzana</h5>
                        <p class="card-text">Deliciosas manzanas frescas y jugosas.</p>
                        <p class="card-text"><strong>Precio: $2.50</strong></p>

                        <a href="pedidos.php" class="btn btn-primary" name="btnregistrar">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de ejemplo de fruta 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="img/durazno.jpg" class="card-img-top" alt="Durazno">
                    <div class="card-body">
                        <h5 class="card-title">Durazno</h5>
                        <p class="card-text">Duraznos frescos listos para comer.</p>
                        <p class="card-text"><strong>Precio: $3.90</strong></p>
                        <a href="pedidos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de ejemplo de fruta 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="img/naranjaa.jpg" class="card-img-top" alt="Naranja">
                    <div class="card-body">
                        <h5 class="card-title">Naranja</h5>
                        <p class="card-text">Naranjas dulces y llenas de vitamina C.</p>
                        <p class="card-text"><strong>Precio: $2.20</strong></p>
                        <a href="pedidos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>