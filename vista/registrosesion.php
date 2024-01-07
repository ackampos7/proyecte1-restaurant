<section class="container-fluid">
    <div class="container">
    <div class="forms">
        <h2>Crear una cuenta</h2>
        <p><a href="<?= URL ?>?controller=usuario">Ya tienes una cuenta? Inicia sesión aquí</a></p>
        <form class="form-admin" action="<?= URL ?>?controller=usuario&action=createNewUser" method="post">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellidos" placeholder="Apellidos">
            <input type="password" name="contraseña" placeholder="Contraseña">
            <input type="text" name="email" placeholder="Dirección de correo electrónico">
            <input class="button-submit" type="submit" name="crearcuenta" value="CREAR CUENTA">
        </form>
    </div>
    </div>
</section>