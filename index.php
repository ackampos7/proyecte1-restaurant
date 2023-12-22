<?php
    include_once 'config/functions.php';
    include_once 'config/parameters.php';
    include_once 'vista/header.php';
    include_once 'controlador/pedidoController.php';
    include_once 'controlador/productoController.php';
    include_once 'controlador/usuarioController.php';
    include_once 'controlador/homeController.php';

    if(!isset($_GET['controller'])) {
        header("Location:" . URL . "?controller=home");
    } else {
        $nombre_controller = $_GET['controller'] . "Controller";

        if(class_exists($nombre_controller)) {
            $controller = new $nombre_controller;

            if(isset($_GET['action'])) {
                $action = $_GET['action'];
            } else {
                $action = action_default;
            }

            $controller->$action();

        } else {
            header("Location:".URL."?controller=home");
        }
    }

    include_once 'vista/footer.php';
?>