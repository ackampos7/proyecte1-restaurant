<section class="container-fluid">
    <form action="<?= URL ?>?controller=micuenta&action=modificarProducto" method="post">
        <input type="hidden" name="idescondido" value="<?= $id ?>">
        <input type="text" name="nombreproducto" placeholder="Nombre del producto">
        <br>
        <input type="text" name="precioproducto" placeholder="Precio del producto">
        <br>
        <input type="text" name="categoria" placeholder="Categoria">
        <input type="submit" name="modificarproducto" value="Modificar">
    </form>
</section>