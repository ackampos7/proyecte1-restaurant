<?php
    include_once 'config/functions.php';
    include_once 'config/parameters.php';
    include_once 'controlador/pedidoController.php';
    include_once 'controlador/productoController.php';
    include_once 'controlador/usuarioController.php';
    include_once 'controlador/homeController.php';
    include_once 'controlador/reviewsController.php';
    include_once 'controlador/APIController.php';

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
?>