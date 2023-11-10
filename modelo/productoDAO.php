<?php
    include_once 'modelo/producto.php';
    include_once 'config/dataBase.php';

    class productoDAO {
        public static function getAllProducts() {

            $con = dataBase::connect();

            if($result = $con->query("SELECT * FROM productos;")) {
                $productos = array();
                while ($producto = $result->fetch_object('Producto')) {
                    $productos[] = $producto;
                }
                return $products;
            }
        }
    }
?>