<section class="container-fluid">
    <div class="container">
    <div class="forms">
        <h2>Iniciar sesión</h2>
        <form action="<?= URL ?>?controller=usuario&action=iniciarSesion" method="post">
            <input type="text" name="email" placeholder="Dirección de correo electronico">
            <br>
            <input type="password" name="contraseña" placeholder="Contraseña">
            <br>
            <input type="submit" name="iniciarsesion" value="INICIAR SESIÓN">
        </form>
        <p><a href="<?= URL ?>?controller=usuario&action=registroVista">Aún no tienes una cuenta? Crea una aquí</a></p>
    </div>
    </div>
</section>