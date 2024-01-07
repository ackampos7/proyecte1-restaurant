<section class="container-fluid">
    <div class="container">
        <div class="forms">
            <h3>Modificar usuario</h3>
            <form action="<?= URL ?>?controller=micuenta&action=modificarUsuario" method="post">
                <input type="hidden" name="idescondido" value="<?= $id ?>">
                <label for="nombre">Nombre usuario</label>
                <input type="text" name="nombreusuario" placeholder="Nombre del usuario" value="<?= $usuario->getNombre() ?>">
                <label for="nombre">Apellidos usuario</label>
                <input type="text" name="apellidousuario" placeholder="Apellidos del usuario" value="<?= $usuario->getApellidos() ?>">
                <label for="nombre">Contraseña</label>
                <input type="password" name="contraseña" placeholder="Contraseña" value="<?= $usuario->getContraseña() ?>">
                <label for="nombre">Correo electronico</label>
                <input type="text" name="email" placeholder="Correo electronico" value="<?= $usuario->getEmail() ?>">
                <label for="nombre">Rol</label>
                <select id="rol" name="rol">
                    <option value="Administrador">Administrador</option>
                    <option selected value="Cliente">Cliente</option>
                </select>
                <br>
                <input class="button-submit" type="submit" name="modificarusuario" value="Añadir">
            </form>
        </div>
    </div>
</section>
