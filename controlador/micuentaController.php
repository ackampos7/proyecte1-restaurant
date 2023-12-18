<?php

    include_once 'modelo/pedidoDAO.php';
    include_once 'modelo/productoDAO.php';
    include_once 'config/functions.php';


    class micuentaController {
        public static function index() {
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                $productos = productoDAO::getAllProducts();
                include_once 'vista/micuenta.php';
            }
        }


        public static function gestionProducto(){

            $id = $_POST['idescondido'];

            if(isset($_POST['modificar'])){
                $producto = productoDAO::getProductById($id);
                include_once 'vista/modificarproducto.php';
            } else if(isset($_POST['eliminar'])){
                micuentaController::eliminar($id);
            }
        }

        public static function añadirVista(){
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/añadirproducto.php';
            }

        }

        public static function añadirProducto(){
            $nombre = $_POST['nombreproducto'];
            $precio = $_POST['precioproducto'];
            $categoria = $_POST['categoria'];
            productoDAO::añadirProducto($nombre, $precio, $categoria);
            header("Location:".URL."?controller=micuenta");
        }

        public static function modificarProducto(){
            $id = $_POST['idescondido'];
            $nombre = $_POST['nombreproducto'];
            $precio = $_POST['precioproducto'];
            $categoria = $_POST['categoria'];
            productoDAO::modificarProducto($nombre, $precio, $categoria, $id);
            header("Location:".URL."?controller=micuenta");
        }

        public static function eliminar($id){
            productoDAO::eliminarProducto($id);
            header("Location:".URL."?controller=micuenta");
        }
    }






?>