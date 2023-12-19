<?php

    include_once 'modelo/pedidoDAO.php';
    include_once 'config/functions.php';


    class pedidoController {
        public static function index() {
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/header.php';
                include_once 'vista/carrito.php';
            }
        }

        public static function sumarCantidad() {

            $idcantidad = $_POST['idescondido'];
            for($i = 0; $i < count($_SESSION['pedido']); $i++) {
                if($_SESSION['pedido'][$i][0] == $idcantidad) {
                    $_SESSION['pedido'][$i][1]++;
                }
            }

            header("Location:".URL."?controller=pedido");
        }

        public static function restarCantidad() {

            $idcantidad = $_POST['idescondido'];
            for($i = 0; $i < count($_SESSION['pedido']); $i++) {
                if($_SESSION['pedido'][$i][0] == $idcantidad) {
                    if($_SESSION['pedido'][$i][1] <= 1) {
                        unset($_SESSION['pedido'][$i]);
                        $_SESSION['pedido'] = array_values($_SESSION['pedido']);
                    } else {
                        $_SESSION['pedido'][$i][1]--;
                    }
                }
            }

            header("Location:".URL."?controller=pedido"); 
        }

        public static function borrarProductoCarrito() {

            $idborrar = $_POST['idescondido'];
            for($i = 0; $i < count($_SESSION['pedido']); $i++) {
                if($_SESSION['pedido'][$i][0] == $idborrar) {
                    unset($_SESSION['pedido'][$i]);
                    $_SESSION['pedido'] = array_values($_SESSION['pedido']);
                }
            }

            header("Location:".URL."?controller=pedido"); 
        }

        public static function finalizarPedido(){
            $preciototal = $_POST['preciototal'];
            setcookie("ultimopedido", $preciototal);
            pedidoDAO::finalizarPedido();
            $_SESSION['pedido'] = [];
            header("Location:".URL."?controller=pedido"); 
        }
    }






?>