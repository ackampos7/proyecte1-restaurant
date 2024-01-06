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
<section class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light header">
  <a class="navbar-brand" href="#"><img src="imagenes/logo.jpg"></img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="?controller=home">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=producto">Carta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=pedido">Carrito</a>
      </li>
      <?php if(isset($_SESSION['usuario'])) {    ?>
            <li class="nav-item"><a class="nav-link" href="?controller=micuenta">Mi cuenta</a></li>
        <?php }else { ?>
            <li class="nav-item"><a class="nav-link" href="?controller=usuario">Iniciar sesión</a></li>
    <?php } ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>