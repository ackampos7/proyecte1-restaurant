<?php

    include_once 'modelo/productoDAO.php';
    
    class productoController {
        public static function index() {
            if(!isset($_GET['controller'])) {
                include_once '../vista/home.php';
            } else {
                $productos = productoDAO::getAllProducts();
                include_once 'vista/carta.php';
            }
        }

        public static function getProductById($id) {
            productoDAO::getProductById($id);
        }

        public static function añadirCarrito($id) {
             productoDAO::añadirCarrito($id);
        }
    }


    ?>