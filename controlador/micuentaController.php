<?php

    include_once 'modelo/pedidoDAO.php';
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
                include_once 'vista/modificarproducto.php';
            } else if(isset($_POST['eliminar'])){
                eliminar($id);
            }
        }

        public static function eliminar($id){
            productoDAO::eliminarProducto($id);
            header("Location:".URL."?controller=micuenta");
        }
    }






?>