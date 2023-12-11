<?php
    require_once 'modelo/Usuario.php';
    include_once 'config/database.php';
    include_once 'config/functions.php';

    class pedidoDAO {

        public static function añadirCarrito($id){

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

        public static function sumarCantidad($id) {
            for($i = 0; $i < count($_SESSION['pedido']); $i++) {
                if($_SESSION['pedido'][$i][0] == $id) {
                    $_SESSION['pedido'][$i][1]++;
                }
            }
        }

        public static function restarCantidad($id) {
           for($i = 0; $i < count($_SESSION['pedido']); $i++) {
                if($_SESSION['pedido'][$i][0] == $id) {
                    if($_SESSION['pedido'][$i][1] <= 1) {
                        unset($_SESSION['pedido'][$i]);
                        $_SESSION['pedido'] = array_values($_SESSION['pedido']);
                    } else {
                        $_SESSION['pedido'][$i][1]--;
                    }
                }
            } 
        }

        public static function borrarProductoCarrito($id) {
            for($i = 0; $i < count($_SESSION['pedido']); $i++) {
                if($_SESSION['pedido'][$i][0] == $id) {
                    unset($_SESSION['pedido'][$i]);
                    $_SESSION['pedido'] = array_values($_SESSION['pedido']);
                }
            }
        }

        public static function finalizarPedido()  {
            $con = database::connect();
            $usuarioid = $_SESSION['usuario']->getUsuarioid();
            $date = date('Y-m-d H:i:s');
            $result = $con->query("INSERT INTO pedidos (usuario_id, fecha_pedido, estado) VALUES ('$usuarioid', '$date', 'En proceso');");
            $result = $con->query("SELECT pedido_id FROM pedidos WHERE usuario_id = '$usuarioid' AND fecha_pedido = '$date' LIMIT 1;");
            $row = mysqli_fetch_assoc($result);
            $pedidoid = $row['pedido_id'];

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