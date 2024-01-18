<?php

    //Controlador de la vista home
    class homeController {
        public function index() {
            //Incluye la vista home por defecto
            include_once 'vista/header.php';
            include_once 'vista/home.php';
        }
    }

?>