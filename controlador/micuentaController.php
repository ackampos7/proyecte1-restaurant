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
                micuentaController::eliminar($id);
            }
        }

        public static function añadirProducto(){
            $nombre = $_POST['nombreproducto'];
            $precio = $_POST['precioproducto'];
            $categoria = $_POST['categoria'];
            productoDAO::añadirProducto($nombre, $precio, $categoria                                                      v v    v  bbvbvc     );
            header("Location:".URL."?controller=micuenta");
        }

        public static function modificarProducto(){
            $id = $_POST['idescondido'];
            $nombre = $_POST['nombreproducto'];
            $precio = $_POST['precioproducto'];
            $categoria = $_POST['categoria'];
            productoDAO::modificarProducto($nombre, $precio, $categoria, $id);
            //echo "Nombre: ".$nombre." Precio: ".$precio." Categoria: ".$categoria." ID: ".$id;
            header("Location:".URL."?controller=micuenta");
        }

        public static function eliminar($id){
            productoDAO::eliminarProducto($id);
            header("Location:".URL."?controller=micuenta");
        }
    }






?>