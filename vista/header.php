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
    <link href="css/reviews.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/notie/dist/notie.min.css">
    <title>Restaurant Ricardo Tormo</title>
</head>
<body>

<section class="container-fluid header">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div id="navbarSupportedContent">
    <ul class="row navbar-nav mr-auto nav-header">
      <li class="col-12 col-md-6 col-lg-2">
        <a class="navbar-brand" href="?controller=home"><img src="imagenes/logo.jpg" alt="logo de la empresa"></img></a>
      </li>
      <li id="navbarSupportedContent" class="col-12 col-md-6 col-lg-2 nav-item">
        <a  class="nav-link" href="?controller=home">Inicio</a>
      </li>
      <li class="col-12 col-md-6 col-lg-2 nav-item">
        <a class="nav-link" href="?controller=producto">Carta</a>
      </li>
      <li class="col-12 col-md-6 col-lg-2 nav-item">
        <a class="nav-link" href="?controller=pedido">Carrito</a>
      </li>
      <li class="col-12 col-md-6 col-lg-2 nav-item">
        <a class="nav-link" href="?controller=reviews">Reseñas</a>
</li>
      <?php if(isset($_SESSION['usuario'])) {    ?>
            <li class="col-12 col-md-6 col-lg-2 nav-item"><a class="nav-link" href="?controller=micuenta">Mi cuenta</a></li>
        <?php }else { ?>
            <li class="col-12 col-md-6 col-lg-2 nav-item"><a class="nav-link" href="?controller=usuario">Iniciar sesión</a></li>
    <?php } ?>
        <li class="col-12 col-md-6 col-lg-2">    
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 button-search" type="submit">Buscar</button>
          </form>
        </li>
    </ul>

  </div>
</nav>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

