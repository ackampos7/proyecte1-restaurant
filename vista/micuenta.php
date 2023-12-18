<?php if(get_class($_SESSION['usuario']) == "Administrador") { ?>

<section class="container-fluid">
    <form action="<?= URL ?>?controller=micuenta&action=añadirVista" method="post">
        <input type="submit" name="añadir" value="Añadir producto">
    </form>
    <table>
    <tr class="table-header">
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio Unitario</th>
            <th>Categoria</th>
            <th></th>
    </tr>
    <?php foreach($productos as $producto) { ?>
        <tr class="row-producto">
        <td><?= $producto->getProductoId() ?></td>
        <td><?= $producto->getNombre() ?></td>
        <td><?= $producto->getPrecioUnidad() ?>€</td>
        <td><?= $producto->getCategoriaId() ?></td>
        <td>
        <form action="<?= URL ?>?controller=micuenta&action=gestionProducto" method="post">
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

