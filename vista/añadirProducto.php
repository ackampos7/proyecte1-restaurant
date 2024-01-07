<section class="container-fluid">
    <div class="container">
        <div class="forms">
            <h2>Modificar Producto</h2>
            <form class="form-admin" action="<?= URL ?>?controller=micuenta&action=añadirProducto" method="post">
                <label for="nombre">Nombre producto</label>
                <input type="text" name="nombreproducto" placeholder="Nombre del producto">
                <label for="nombre">Precio Producto</label>
                <input type="text" name="precioproducto" placeholder="Precio del producto">
                <label for="nombre">Categoria</label>
                <input type="text" name="categoria" placeholder="Categoria">
                <input class="button-submit" type="submit" name="añadirproducto" value="Añadir">
            </form>
        </div>
    </div>    
</section>
