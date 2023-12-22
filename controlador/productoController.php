<?php

    include_once 'modelo/productoDAO.php';
    
    class productoController {
        public static function index() {
            if(!isset($_GET['controller'])) {
                include_once '../vista/home.php';
            } else {
                $productos = productoDAO::getAllProducts();
                $bocadillos = productoDAO::getProductByType(1);
                $tapas = productoDAO::getProductByType(2);
                $hamburguesas = productoDAO::getProductByType(3);
                //var_dump($bocadillos);
                //var_dump($tapas);
                //var_dump($hamburguesas);
                include_once 'vista/carta.php';
            }
        }

        public static function getProductById($id) {
            productoDAO::getProductById($id);
        }


        public static function añadirCarrito() {
            $id = $_POST['escondido'];
            $found = false;
            $position = -1;

            if(count($_SESSION['pedido']) > 0) {
                for($i = 0; $i < count($_SESSION['pedido']); $i++){
                    if($_SESSION['pedido'][$i][0] == $id) {
                        $found = true;
                        $position = $i;
                    }
                }
            }

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