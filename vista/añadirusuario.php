<section class="container-fluid">
    <h3>Añadir usuario</h3>
    <form action="<?= URL ?>?controller=micuenta&action=añadirUsuario" method="post">
        <input type="text" name="nombreusuario" placeholder="Nombre del usuario">
        <br>
        <input type="text" name="apellidousuario" placeholder="Apellidos del usuario">
        <br>
        <input type="password" name="contraseña" placeholder="Contraseña">
        <br>
        <input type="text" name="email" placeholder="Correo electronico">
        <br>
        <select id="rol" name="rol">
            <option value="Administrador">Administrador</option>
            <option value="Cliente">Cliente</option>
        </select>
        <br>
        <input type="submit" name="añadirusuario" value="Añadir">
    </form>
</section>
