<section class="container-fluid">
    <h3>Modificar usuario</h3>
    <form action="<?= URL ?>?controller=micuenta&action=modificarUsuario" method="post">
        <input type="hidden" name="idescondido" value="<?= $id ?>">
        <input type="text" name="nombreusuario" placeholder="Nombre del usuario" value="<?= $usuario->getNombre() ?>">
        <br>
        <input type="text" name="apellidousuario" placeholder="Apellidos del usuario" value="<?= $usuario->getApellidos() ?>">
        <br>
        <input type="password" name="contraseña" placeholder="Contraseña" value="<?= $usuario->getContraseña() ?>">
        <br>
        <input type="text" name="email" placeholder="Correo electronico" value="<?= $usuario->getEmail() ?>">
        <br>
        <select id="rol" name="rol">
            <option value="Administrador">Administrador</option>
            <option selected value="Cliente">Cliente</option>
        </select>
        <br>
        <input type="submit" name="modificarusuario" value="Añadir">
    </form>
</section>
