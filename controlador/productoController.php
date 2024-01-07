<?php

    include_once 'modelo/productoDAO.php';
    
    class productoController {
        public static function index() {
            //Comprueba la existencia del controller que se ha llamado y lo incluye si lo encuentra.
            if(!isset($_GET['controller'])) {
                include_once '../vista/home.php';
            } else {
                $productos = productoDAO::getAllProducts();
                $bocadillos = productoDAO::getProductByType(1);
                $tapas = productoDAO::getProductByType(2);
                $hamburguesas = productoDAO::getProductByType(3);
                include_once 'vista/carta.php';
            }
        }

        public static function getProductById($id) {
            //Busca la id en la base de datos y devuelve el producto pertinente
            productoDAO::getProductById($id);
        }


        public static function añadirCarrito() {
            //Añade el producto selecionado al carrito
            $id = $_POST['escondido'];
            $found = false;
            $position = -1;

            //Comprueba si ya existe el producto en el carrito
            if(count($_SESSION['pedido']) > 0) {
                for($i = 0; $i < count($_SESSION['pedido']); $i++){
                    if($_SESSION['pedido'][$i][0] == $id) {
                        $found = true;
                        $position = $i;
                    }
                }
            }
            
            //Si no existe, lo añade. Si existe, le añade 1 a la cantidad
            if($found == false) {
                $p = array($id, 1);
                array_push($_SESSION['pedido'], $p);
            } else {
                $_SESSION["pedido"][$position][1]++; 
            }

            header("Location:".URL."?controller=producto");
        }
    }


    ?>