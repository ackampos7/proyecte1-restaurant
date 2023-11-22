<?php
    include_once '../modelo/producto.php';
    include_once '../config/dataBase.php';
    include_once '../config/functions.php';

    class productoDAO {
        public static function getAllProducts() {

            $con = dataBase::connect();

            if($result = $con->query("SELECT * FROM productos;")) {
                $productos = array();
                while ($producto = $result->fetch_object('Producto')) {
                    $productos[] = $producto;
                }
                return $productos;
            }
        }

        public static function getProductById($id) {
            $con = database::connect();
            $result = $con->query("SELECT * FROM PRODUCTOS WHERE producto_id = $id;");
            $productoCarro = $result->fetch_object('Producto');
            return $productoCarro;
        }

        public static function añadirCarrito($id) {
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
        }

    }
?>