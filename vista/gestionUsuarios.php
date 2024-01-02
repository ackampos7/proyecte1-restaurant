<div class="container-fluid">
    <h1 class="mi-cuenta">Mi cuenta</h1>
    <div class="micuenta-menu">
        <ul class="pestañas">
            <a class="seccion-pestaña" href="?controller=micuenta">
                <li>Panel de control</li>
            </a>
            <a class="seccion-pestaña" href="?controller=micuenta&action=infocuenta">
                <li>Información de la cuenta</li>
            </a>            
            <a class="seccion-pestaña" href="?controller=micuenta">
                <li>Mis pedidos</li>
            </a>
            <a class="seccion-pestaña" href="?controller=usuario&action=cerrarSesion">
                <li>Cerrar sesión</li>
            </a>
        </ul>
    </div>
</div>

<section class="overflow-x:auto container-fluid">
    <h1>USUARIOS</h1>
    <form action="<?= URL ?>?controller=micuenta&action=añadirUsuarioVista" method="post">
        <input class="añadirproducto" type="submit" name="añadir" value="Añadir usuario">
    </form>
    <table class="table-admin-productos">
    <tr class="table-header">
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Contraseña</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Acciones</th>
    </tr>
    <?php foreach($usuarios as $usuario) { ?>
    <tr class="row-producto">
        <td><?= $usuario->getUsuarioid() ?></td>
        <td><?= $usuario->getNombre() ?></td>
        <td><?= $usuario->getApellidos() ?></td>
        <td><?= $usuario->getContraseña() ?></td>
        <td><?= $usuario->getEmail() ?></td>
        <td><?= $usuario->getRol() ?></td>
        <td class="action">
        <form class="modificar-eliminar" action="<?= URL ?>?controller=micuenta&action=adminUsuario" method="post">
            <input type="hidden" name="idescondido" value="<?= $usuario->getUsuarioid() ?>">
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