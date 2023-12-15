<section class="container-fluid">
    <form action="<?= URL ?>?controller=micuenta&action=añadirProducto" method="post">
        <input type="text" name="nombreproducto" placeholder="Nombre del producto">
        <br>
        <input type="text" name="precioproducto" placeholder="Precio del producto">
        <br>
        <input type="text" name="categoria" placeholder="Categoria">
        <input type="submit" name="añadirproducto" value="Añadir">
    </form>
</section>