<?php

    include_once '../modelo/productoDAO.php';
    
    class productoController {
        public static function index() {
            productoDAO::getAllProducts();
        }
    }