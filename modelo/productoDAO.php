<?php
    include_once 'modelo/producto.php';
    include_once 'modelo/Bocadillo.php';
    include_once 'modelo/Tapa.php';
    include_once 'modelo/Hamburguesa.php';
    include_once 'config/dataBase.php';
    include_once 'config/functions.php';

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

        public static function getProductByType($tipo) {
            $con = database::connect();
            $stmt = $con->prepare("SELECT * FROM PRODUCTOS WHERE categoria_id=?");
            $stmt->bind_param("i", $tipo);
            $stmt->execute();
            $result = $stmt->get_result();
            $con->close();

            if($tipo == 1) {
                $categoria = "Bocadillo";
            } else if($tipo == 2) {
                $categoria = "Tapa";
            } else if($tipo == 3) {
                $categoria = "Hamburguesa";
            }

            $listaProductos = [];
            
            while($productoDB = $result->fetch_object($categoria)){
                $listaProductos[] = $productoDB;
            }

            return $listaProductos;
        }

        public static function añadirProducto($nombre, $precio, $categoria){
            $con = database::connect();
            $result = $con->query("INSERT INTO PRODUCTOS (nombre_producto, precio_unidad, categoria_id) VALUES ('$nombre', '$precio', '$categoria');");
        }

        public static function modificarProducto($nombre, $precio, $categoria, $id) {
            $con = database::connect();
            $result = $con->query("UPDATE PRODUCTOS SET nombre_producto = '$nombre', precio_unidad = '$precio', categoria_id = '$categoria' WHERE producto_id = '$id';");
        }

        public static function eliminarProducto($id){
            $con = database::connect();
            $result = $con->query("DELETE FROM PRODUCTOS WHERE producto_id = '$id'");
        }

    }
?>