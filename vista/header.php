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
    <link href="css/carrito.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="css/carta.css" rel="stylesheet">
    <link href="css/micuenta.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Restaurant Ricardo Tormo</title>
</head>
<body>

<header class="container-fluid">
<div class="row header">
    <div class="col-12 col-md-12 col-lg-6 header-general">
        <nav class="navheader">
            <ul>
                <li><img src="imagenes/logo.jpg"></img></li>
                <li><a href="?controller=home">Inicio</a></li>
                <li><a href="?controller=producto">Carta</a></li>
                <li><a href="?controller=pedido">Carrito</a></li>
                <?php if(isset($_SESSION['usuario'])) {    ?>
                    <li><a href="?controller=micuenta">Mi cuenta</a></li>
                <?php }else { ?>
                    <li><a href="?controller=usuario">Iniciar sesión</a></li>
                <?php } ?>
                <li>
                <nav class="navbar">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </nav>
                </li>
            </ul>
        </nav>
    </div>
    </div>
    </div>
    
</header>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>