<?php
    include_once 'modelo/Usuario.php';
    include_once 'config/functions.php';
    include_once 'controlador/usuarioController.php';
    include_once 'controlador/micuentaController.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/headerfooter.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="css/carta.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Restaurant Ricardo Tormo</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary header">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="imagenes/logo-blanco.webp" height="57.73" width="239.19"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= URL ?>?controller=home">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= URL ?>?controller=producto">Carta</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= URL ?>?controller=pedido">Carrito</a>
                </li>
            </ul>
            <nav class="navbar bg-body-tertiary">
            <?php
            if(isset($_SESSION['usuario'])) {
            ?>

            <div class="container-fluid">
             <p><a href="<?= URL ?>?controller=micuenta">Mi Cuenta</a></p>
                <form action="<?= URL ?>?controller=usuario&action=cerrarSesion" method="post">
                    <input type="submit" name="cerrarsesion" value="X">
                </form>
            </div>

            <?php
                } else {
            ?>
                    <div class="container-fluid">
                        <a href="<?= URL ?>?controller=usuario">Iniciar Sesión</a>
                    <div>

            <?php
                }
            ?>
            <div class="container-fluid">
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
            </nav>
        </div>
        </nav>
    </header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>