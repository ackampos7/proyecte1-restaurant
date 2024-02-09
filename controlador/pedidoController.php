<?php

    include_once 'modelo/pedidoDAO.php';
    include_once 'config/functions.php';
    include_once 'modelo/calcularPrecioTotal.php';


    class pedidoController {
        public static function index() {
            //Comprueba la existencia del controller que se ha llamado y lo incluye si lo encuentra.
            if(!isset($_GET['controller'])) {
                include_once 'vista/header.php';
                include_once 'vista/home.php';
                include_once 'vista/footer.php';
            } else {

                if(!isset($preciototal)) {
                    $preciototal = 0;
                }
                include_once 'vista/header.php';
                include_once 'vista/carrito.php';
                include_once 'vista/footer.php';
            }
        }

        public static function pedidoFinalizado() {
            if(!isset($_GET['controller'])) {
                include_once 'vista/header.php';
                include_once 'vista/home.php';
                include_once 'vista/footer.php';
            } else {
                include_once 'vista/header.php';
                include_once 'vista/pedidoFinalizado.php';
                include_once 'vista/footer.php';
            }
        }

        public static function infoPedido() {
            if(!isset($_GET['controller'])) {
                include_once 'vista/header.php';
                include_once 'vista/home.php';
                include_once 'vista/footer.php';
            } else {
                include_once 'vista/header.php';
                include_once 'vista/infoPedido.php';
                include_once 'vista/footer.php';
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
            //Suma la cantidad de un producto especifico en el carrito
            for($i = 0; $i < count($_SESSION['pedido']); $i++) {
                if($_SESSION['pedido'][$i][0] == $idcantidad) {
                    $_SESSION['pedido'][$i][1]++;
                }
            }

            header("Location:".URL."?controller=pedido");
        }

        public static function restarCantidad($idcantidad) {
            //Resta la cantidad de un producto especifico en el carrito
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
            //Elimina el producto del carrito
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
            //Finaliza el pedido y lo guarda en la base de datos
            $preciototal = $_POST['preciototal'];
            $propina = $_POST['propina'];
            setcookie("ultimopedido_".$_SESSION['usuario']->getUsuarioid(), $preciototal);
            pedidoDAO::finalizarPedido($preciototal, $propina);
            $_SESSION['pedido'] = [];
            header("Location:".URL."?controller=pedido&action=pedidoFinalizado"); 
        }

    }






?>