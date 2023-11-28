<?php
    include_once '../modelo/Usuario.php';
    include_once '../config/functions.php';
    include_once '../controlador/usuarioController.php';

    if(isset($_POST['cerrarsesion'])){
        usuarioController::cerrarSesion();
        header('Location: ../vista/index.php');
    }
?>

<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="../imagenes/logo.jpg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="carta.php">Carta</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="carrito.php">Carrito</a>
                </li>
            </ul>
            <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
            </nav>
            <?php
            if(isset($_SESSION['usuario'])) {
            ?>

            <div class="container-fluid">
                <p> <?php echo "Bienvenido, usuario." ?> </p>
                <form method="post">
                    <input type="submit" name="cerrarsesion" value="X">
                </form>
            </div>

            <?php
                } else {
            ?>
                    <div class="container-fluid">
                        <a href="iniciosesion.php">Iniciar Sesión</a>
                    <div>

            <?php
                }
            ?>
            </div>
        </div>
        </nav>
    </header>