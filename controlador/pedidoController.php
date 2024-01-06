<?php

    include_once 'modelo/pedidoDAO.php';
    include_once 'config/functions.php';
    include_once 'modelo/calcularPrecioTotal.php';


    class pedidoController {
        public static function index() {
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {

                if(!isset($preciototal)) {
                    $preciototal = 0;
                }
                include_once 'vista/carrito.php';
            }
        }

        public static function modificarCantidad() {
            $idcantidad = $_POST['idescondido'];

            if(isset($_POST['sumarcantidad'])) {
                pedidoController::sumarCantidad($idcantidad);
            } else if(isset($_POST['restarcantidad'])) {
                pedidoController::restarCantidad($idcantidad);
            }
        }

        public static function sumarCantidad($idcantidad) {

            for($i = 0; $i < count($_SESSION['pedido']); $i++) {
                if($_SESSION['pedido'][$i][0] == $idcantidad) {
                    $_SESSION['pedido'][$i][1]++;
                }
            }

            header("Location:".URL."?controller=pedido");
        }

        public static function restarCantidad($idcantidad) {

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
            setcookie("ultimopedido_".$_SESSION['usuario']->getUsuarioid(), $preciototal);
            pedidoDAO::finalizarPedido();
            $_SESSION['pedido'] = [];
            header("Location:".URL."?controller=pedido"); 
        }
    }






?>