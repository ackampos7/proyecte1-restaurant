<div>
    <h2>Crear una cuenta</h2>
    <p><a href="<?= URL ?>?controller=usuario">Ya tienes una cuenta? Inicia sesión aquí</a></p>
    <form action="<?= URL ?>?controller=usuario&action=createNewUser" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <br>
        <input type="text" name="apellidos" placeholder="Apellidos">
        <br>
        <input type="password" name="contraseña" placeholder="Contraseña">
        <br>
        <input type="text" name="email" placeholder="Dirección de correo electrónico">
        <br>
        <input type="submit" name="crearcuenta" value="CREAR CUENTA">
    </form>
</div>