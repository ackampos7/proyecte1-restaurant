
<div class="container-fluid">
<?php if(count($_SESSION['pedido']) > 0) { ?>
<table class="table-carrito">
        <tr class="table-header">
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Precio Total</th>
            <th></th>
        </tr>
        <?php
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
                <form action="<?= URL ?>?controller=pedido&action=sumarCantidad" method="post" class="td-cantidad">
                    <input type="hidden" name="idescondido" value="<?= $productoCarro->getProductoId() ?>">
                    <input type="hidden" name="cantidad" value="<?= $cantidad ?>">
                    <input type="submit" name="sumarCantidad" value="+">
                    <p><?= $cantidad ?></p>
                </form>
                <form action="<?= URL ?>?controller=pedido&action=restarCantidad" method="post" class="td-cantidad">
                    <input type="hidden" name="idescondido" value="<?= $productoCarro->getProductoId() ?>">
                    <input type="submit" name="restarcantidad" value="-">        
                </form>
            </td>
            <td><p><?= $productoCarro->getPrecioUnidad() ?>€</p></td>
            <td><p><?= $precioproductototal."€" ?></p></td>
            <td>
                <form action="<?= URL ?>?controller=pedido&action=borrarProductoCarrito" method="post" class="td-cantidad">
                    <input type="hidden" name="idescondido" value="<?= $productoCarro->getProductoId() ?>">
                    <input type="submit" name="borrarProductoCarrito" value="X">
                </form>
            </td>
        </tr>
        <?php
                }
        ?>
    </table>
</div>
    <p><?= $preciototal ?>€</p>
        <div>
            <form action="<?= URL ?>?controller=pedido&action=finalizarPedido" method="post">
                <input type="hidden" name="preciototal" value="<?= $preciototal ?>">
                <input class="finalizar-button" type="submit" name="finalizarpedido" value="Finalizar pedido">
            </form>
</div>
<?php
} else {
?>

<div class="carrito-vacio">
    <h2>EL CARRITO ESTÁ VACÍO.</h2>
    <p>INICIA SESIÓN O AÑADE UN PRODUCTO AL CARRITO PARA VER LOS DETALLES</p>
</div>

<?php    
}
?>