<?php
    include_once 'config/functions.php';
    include_once 'vista/header.php';
    include_once 'controlador/productoController.php';
    include_once 'controlador/pedidoController.php';
    include_once 'modelo/calcularPrecioTotal.php';
    include_once 'modelo/pedidoDAO.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../css/carrito.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Restaurant Ricardo Tormo</title>
</head>
<body>
<?php
if(isset($_POST["añadircantidad"])) {
        $idcantidad = $_POST['idescondido'];
        pedidoController::sumarCantidad($idcantidad);
        header('Location: ../vista/carrito.php');
    }

    if(isset($_POST['reducircantidad'])) {
        $idcantidad = $_POST['idescondido'];
        pedidoController::restarCantidad($idcantidad);
        header('Location: ../vista/carrito.php');
    }

    if(isset($_POST['borrarproductocarrito'])){
        $idborrar = $_POST['idescondido'];
        pedidoController::borrarProductoCarrito($idborrar);
        header('Location: ../vista/carrito.php');
    }

    if(isset($_POST['finalizarpedido'])){
        pedidoController::finalizarPedido();
    }

    if(!isset($preciototal)) {
        $preciototal = 0;
    }
?>
<div class="container-fluid">
<table border="1" class="table-carrito">
        <tr class="table-header">
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Precio Total</th>
            <th></th>
        </tr>
        <?php
        if(isset($_SESSION['pedido'])) {
            foreach($_SESSION['pedido'] as $p) {
                $productoCarro = productoDAO::getProductById($p[0]);
                $cantidad = $p[1];
                $precioproductototal = calcularPrecioTotal::calcularPrecioProductoTotal($cantidad, $productoCarro->getPrecioUnidad());
                $preciototal = $preciototal + $precioproductototal;
        ?>
        <tr class="row-producto">
            <td><img src="<?php echo $productoCarro->getImg() ?>" height="143" width="212.83" alt=""></td>
            <td><?= $productoCarro->getNombre() ?></td>
            <td>
                <form method="post" class="td-cantidad">
                    <input type="hidden" name="idescondido" value="<?= $productoCarro->getProductoId() ?>">
                    <input type="hidden" name="cantidad" value="<?= $cantidad ?>">
                    <input type="submit" name="añadircantidad" value="+">
                    <p><?= $cantidad ?></p>
                    <input type="submit" name="reducircantidad" value="-">        
                </form>
            </td>
            <td><p><?= $productoCarro->getPrecioUnidad() ?>€</p></td>
            <td><p><?= $precioproductototal."€" ?></p></td>
            <td>
                <form method="post">
                    <input type="hidden" name="idescondido" value="<?= $productoCarro->getProductoId() ?>">
                    <input type="submit" name="borrarproductocarrito" value="X">
                </form>
            </td>
        </tr>
        <?php
                }
            }
        ?>
    </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>