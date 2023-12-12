<?php

    include_once 'modelo/pedidoDAO.php';


    class pedidoController {
        public static function index() {
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/carrito.php';
            }
        }


        public static function añadirCarrito($id) {
            pedidoDAO::añadirCarrito($id);
        }

        public static function sumarCantidad($id) {
            pedidoDAO::sumarCantidad($id);
        }

        public static function restarCantidad($id) {
            pedidoDAO::restarCantidad($id);
        }

        public static function borrarProductoCarrito($id) {
            pedidoDAO::borrarProductoCarrito($id);
        }

        public static function finalizarPedido(){
            pedidoDAO::finalizarPedido();
        }
    }






?>