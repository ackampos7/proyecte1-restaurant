<?php
    require_once 'modelo/Usuario.php';
    include_once 'config/database.php';
    include_once 'config/functions.php';

    class pedidoDAO {

        public static function finalizarPedido($preciototal, $propina)  {
            //Guarda los detalles del pedido en la base de datos, tanto en pedidos como en pedido-productos
            $con = database::connect();
            $usuarioid = $_SESSION['usuario']->getUsuarioid();
            $date = date('Y-m-d.H:i:s');
            echo $usuarioid;
            $result = $con->query("INSERT INTO pedidos (usuario_id, fecha_pedido, estado, precio_total, propina) VALUES ('$usuarioid', '$date', 'En proceso', '$preciototal', '$propina');");
            $pedidoid = mysqli_insert_id($con);
            $_SESSION['pedidoid'] = $pedidoid;

            foreach($_SESSION['pedido'] as $producto) {
                $productoid = $producto[0];
                $cantidad = $producto[1];
                $result = $con->query("SELECT precio_unidad FROM productos WHERE producto_id = '$productoid' LIMIT 1;");
                $row = mysqli_fetch_assoc($result);
                $preciounidad = $row['precio_unidad'];
                $result = $con->query("INSERT INTO `pedido_productos` (pedido_id, producto_id, precio_unidad, cantidad) VALUES ('$pedidoid', '$productoid','$preciounidad','$cantidad');");
            }

            
        }

        public static function getInfoPedido($id) {
            $con = database::connect();
            $stmt = $con->prepare("SELECT PEDIDOS.PEDIDO_ID, PEDIDOS.FECHA_PEDIDO, PEDIDOS.PRECIO_TOTAL, PEDIDO_PRODUCTOS.PRODUCTO_ID, PEDIDO_PRODUCTOS.CANTIDAD, PEDIDO_PRODUCTOS.PRECIO_UNIDAD, PRODUCTOS.NOMBRE_PRODUCTO FROM PEDIDOS JOIN PEDIDO_PRODUCTOS ON PEDIDOS.PEDIDO_ID = PEDIDO_PRODUCTOS.PEDIDO_ID JOIN PRODUCTOS ON PRODUCTOS.PRODUCTO_ID = PEDIDO_PRODUCTOS.PRODUCTO_ID WHERE PEDIDOS.PEDIDO_ID = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $info = array();

            while($row = $result->fetch_assoc()) {
                $info[] = [
                    'pedido_id' => $row['PEDIDO_ID'],
                    'fecha' => $row['FECHA_PEDIDO'],
                    'precio_total' => $row['PRECIO_TOTAL'],
                    'producto_id' => $row['PRODUCTO_ID'],
                    'cantidad' => $row['CANTIDAD'],
                    'precio' => $row['PRECIO_UNIDAD'],
                    'nombre' => $row['NOMBRE_PRODUCTO'],
                ];
            }
            
            return $info;
        }
    }
?>