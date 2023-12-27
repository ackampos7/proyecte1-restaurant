<?php if(get_class($_SESSION['usuario']) == "Administrador") { ?>

<section class="overflow-x:auto container-fluid">
    <form action="<?= URL ?>?controller=micuenta&action=añadirVista" method="post">
        <input type="submit" name="añadir" value="Añadir producto">
    </form>
    <table class="table-admin-productos">
    <tr class="table-header">
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio Unitario</th>
            <th>Categoria</th>
            <th>Acciones</th>
    </tr>
    <?php foreach($productos as $producto) { ?>
    <tr class="row-producto">
        <td><?= $producto->getProductoId() ?></td>
        <td><?= $producto->getNombre() ?></td>
        <td><?= $producto->getPrecioUnidad() ?>€</td>
        <td><?= $producto->getCategoriaId() ?></td>
        <td class="action">
        <form class="modificar-eliminar" action="<?= URL ?>?controller=micuenta&action=gestionProducto" method="post">
            <input type="hidden" name="idescondido" value="<?= $producto->getProductoId() ?>">
            <input type="submit" name="modificar" value="Modificar">
            <input type="submit" name="eliminar" value="Eliminar">
        </form>
        </td>
    </tr>
    <?php
    }
    ?>
    </table>
</section>
<?php } else { 
?>
    <div>
        <p><?= $_COOKIE['ultimopedido'] ?></p>
    </div>  

<?php }  ?>

