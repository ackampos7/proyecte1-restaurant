<?php
    require_once 'modelo/Usuario.php';
    include_once 'config/database.php';
    include_once 'config/functions.php';

    class pedidoDAO {

        public static function finalizarPedido()  {
            //Guarda los detalles del pedido en la base de datos, tanto en pedidos como en pedido-productos
            $con = database::connect();
            $usuarioid = $_SESSION['usuario']->getUsuarioid();
            $date = date('Y-m-d.H:i:s');
            echo $usuarioid;
            $result = $con->query("INSERT INTO pedidos (usuario_id, fecha_pedido, estado) VALUES ('$usuarioid', '$date', 'En proceso');");
            $pedidoid = mysqli_insert_id($con);
            $_SESSION['pedidoid'] = $pedidoid;

            foreach($_SESSION['pedido'] as $producto) {
                $productoid = $producto[0];
                $cantidad = $producto[1];
                $result = $con->query("SELECT precio_unidad FROM productos WHERE producto_id = '$productoid' LIMIT 1;");
                $row = mysqli_fetch_assoc($result);
                $preciounidad = $row['precio_unidad'];
                $result = $con->query("INSERT INTO `pedido-productos` (pedido_id, producto_id, precio_unidad, cantidad) VALUES ('$pedidoid', '$productoid','$preciounidad','$cantidad');");
            }

            
        }
    }
?>