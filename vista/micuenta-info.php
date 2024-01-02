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
            <a class="seccion-pestaña" href="?controller=usuario&action=cerrarSesion">
                <li>Cerrar sesión</li>
            </a>
        </ul>
    </div>
</div>
<div class="container-fluid">
<h2>Información personal</h2>
<div class="forms">
    <form class="form-admin" action="?controller=usuario&action=modificarusuario" method="post">
        <label for="nombre">Nombre</label>
        <br>
        <input type="text" name="nombre" value="<?= $_SESSION['usuario']->getNombre() ?>" placeholder="<?= $_SESSION['usuario']->getNombre() ?>">
        <br>
        <label for="apellidos">Apellidos</label>
        <br>
        <input type="text" name="apellidos" value="<?= $_SESSION['usuario']->getApellidos() ?>" placeholder="<?= $_SESSION['usuario']->getApellidos() ?>">
        <br>
        <label for="contraseña">Contraseña</label>
        <br>
        <input type="text" name="contraseña" value="<?= $_SESSION['usuario']->getContraseña() ?>" placeholder="<?= $_SESSION['usuario']->getContraseña() ?>">
        <br>
        <label for="email">Correo electronico</label>
        <br>
        <input type="text" name="email" value="<?= $_SESSION['usuario']->getEmail() ?>" placeholder="<?= $_SESSION['usuario']->getEmail() ?>">
        <br>
        <input type="hidden" name="id" value="<?= $_SESSION['usuario']->getUsuarioid() ?>">
        <input class="button-submit" type="submit" name="modificarusuario" value="Modificar Usuario">
    </form>
</div>
</div>
