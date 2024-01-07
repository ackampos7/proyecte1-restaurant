<section class="container-fluid">
    <div class="container">
        <div class="forms">
            <h2>Modificar Producto</h2>
            <form class="form-admin" action="<?= URL ?>?controller=micuenta&action=modificarProducto" method="post">
                <input type="hidden" name="idescondido" value="<?= $id ?>">
                <label for="nombre">Nombre producto</label>
                <input type="text" name="nombreproducto" placeholder="Nombre del producto" value="<?= $producto->getNombre() ?>">
                <label for="nombre">Precio producto</label>
                <input type="text" name="precioproducto" placeholder="Precio del producto" value="<?= $producto->getPrecioUnidad() ?>">
                <label for="nombre">Categoria</label>
                <input type="text" name="categoria" placeholder="Categoria"  value="<?= $producto->getCategoriaId() ?>">
                <input class="button-submit" type="submit" name="modificarproducto" value="Modificar">
            </form>
        </div>
    </div>
</section>
