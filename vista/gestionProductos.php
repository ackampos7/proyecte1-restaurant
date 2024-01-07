<div class="container-fluid div-shadow">
    <h1 class="mi-cuenta">Mi cuenta</h1>
    <div class="micuenta-menu">
        <ul class="row pestañas">
            <a class="col-12 col-sm-12 col-md-6 col-lg-4 seccion-pestaña" href="?controller=micuenta">
                <li>Panel de control</li>
            </a>
            <a class="col-12 col-sm-12 col-md-6 col-lg-4 seccion-pestaña" href="?controller=micuenta&action=infocuenta">
                <li>Información de la cuenta</li>
            </a>            
            <a class="col-12 col-sm-12 col-md-6 col-lg-4 seccion-pestaña" href="?controller=usuario&action=cerrarSesion">
                <li>Cerrar sesión</li>
            </a>
        </ul>
    </div>

<section class="overflow-x:auto container-fluid">
    <h1 class="titulo-admin-seccion">PRODUCTOS</h1>
    <form action="<?= URL ?>?controller=micuenta&action=añadirVista" method="post">
        <input class="añadirproducto" type="submit" name="añadir" value="Añadir producto">
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
        <form class="modificar-eliminar" action="<?= URL ?>?controller=micuenta&action=adminProducto" method="post">
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
</div>