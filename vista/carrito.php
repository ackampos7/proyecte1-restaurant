<section class="container-fluid">
<?php if(count($_SESSION['pedido']) > 0 && isset($_SESSION['usuario'])) { ?>
<div class="div-carrito-shadow">
    <h2 class="mi-carrito">TU CARRITO</h2>
    <div class="div-carrito">
    <table class="overflow-x:auto table-carrito">   
            <tr class="table-header">
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Precio Total</th>
                <th>Eliminar</th>
            </tr>
            <?php
                foreach($_SESSION['pedido'] as $p) {
                    $productoCarro = productoDAO::getProductById($p[0]);
                    $cantidad = $p[1];
                    $precioproductototal = calcularPrecioTotal::calcularPrecioProductoTotal($cantidad, $productoCarro->getPrecioUnidad());
                    $preciototal = $preciototal + $precioproductototal;
            ?>  

            <tr class="row-producto">
                <td><img src="<?php echo $productoCarro->getImg() ?>" height="143" width="212.83" alt="Imagen del producto"></td>
                <td><?= $productoCarro->getNombre() ?></td>
                <td class="cantidad-row">
                    <form action="<?= URL ?>?controller=pedido&action=modificarCantidad" method="post">
                        <input type="hidden" name="idescondido" value="<?= $productoCarro->getProductoId() ?>">
                        <input type="hidden" name="cantidad" value="<?= $cantidad ?>">
                        <input class="button-cantidad" type="submit" name="sumarcantidad" value="+">
                        <p><?= $cantidad ?></p>
                        <input class="button-cantidad" type="submit" name="restarcantidad" value="-">        
                    </form>
                </td>
                <td><p><?= $productoCarro->getPrecioUnidad() ?>€</p></td>
                <td><p><?= $precioproductototal."€" ?></p></td>
                <td>
                    <form action="<?= URL ?>?controller=pedido&action=borrarProductoCarrito" method="post" class="td-cantidad">
                        <input type="hidden" name="idescondido" value="<?= $productoCarro->getProductoId() ?>">
                        <input class="button-eliminar" type="submit" name="borrarProductoCarrito" value="X">
                    </form>
                </td>
            </tr>
            <?php
                    }
            ?>
    </table>
    </div>
    <div class="row container-precio">
    <input type="hidden" name="preciototal" id="preciobase" value="<?= $preciototal ?>">
        <div class="col-12 col-md-6 col-lg-6 preciototal">
            <div class="div-modificarprecio">
                <input type="checkbox" id="activar-propina" checked>Propina
                <input type="number" class="pedido-input" id="propina-input" min="1" max="100" value="3">
            </div>
            <div class="div-modificarprecio">
                <input type="checkbox" id="activar-puntos">Puntos
                <input type="number" class="pedido-input" id="puntos-input" min="0" max="" value="100" step="100" readonly onkeydown="return false">
            </div>
            <p class="textoprecio" id="textoprecio"><?= $preciototal ?>€</p>
        </div>
        <div class="col-12 col-md-12 col-lg-6 finalizar">
        <form action="<?= URL ?>?controller=pedido&action=finalizarPedido" method="post" id="formfinalizar">
            <input type="hidden" name="puntosusuario" id="puntosusuario" value="<?= $_SESSION['usuario']->getPuntos() ?>">
            <input type="hidden" name="propina" id="propina" value="3">
            <input type="hidden" name="preciototal" id="preciototal" value="<?= $preciototal ?>">
            <input class="m-0 finalizar-button" id="finalizar" type="submit" name="finalizarpedido" value="Finalizar pedido">
        </form>
        </div>
    </div>
</div>    

</section>


<?php
} else {
?>

<div class="carrito-vacio">
    <h2 class="h2-vacio">EL CARRITO ESTÁ VACÍO.</h2>
    <p>INICIA SESIÓN O AÑADE UN PRODUCTO AL CARRITO PARA VER LOS DETALLES</p>
</div>

<?php    
}
?>

<script src="src/propina.js"></script>