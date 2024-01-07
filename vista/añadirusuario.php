<section class="container-fluid">
    <div class="container">
        <div class="forms">
            <h2>Modificar Usuario</h2>
            <form class="form-admin" action="<?= URL ?>?controller=micuenta&action=añadirUsuario" method="post">
                <label for="nombre">Nombre usuario</label>
                <input type="text" name="nombreusuario" placeholder="Nombre del usuario">
                <label for="nombre">Apellido usuario</label>
                <input type="text" name="apellidousuario" placeholder="Apellidos del usuario">
                <label for="nombre">Contraseña</label>
                <input type="password" name="contraseña" placeholder="Contraseña">
                <label for="nombre">Correo Electronico</label>
                <input type="text" name="email" placeholder="Correo electronico">
                <label for="nombre">Rol</label>
                <select id="rol" name="rol">
                    <option value="Administrador">Administrador</option>
                    <option value="Cliente">Cliente</option>
                </select>
                <br>
                <input class="button-submit" type="submit" name="añadirusuario" value="Añadir">
            </form>
        </div>
    </div>    
</section>

