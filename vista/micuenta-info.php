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
<h2 class="titulo-admin-seccion">Información personal</h2>
<div class="forms">
    <form class="form-admin" action="?controller=usuario&action=modificarusuario" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?= $_SESSION['usuario']->getNombre() ?>" placeholder="<?= $_SESSION['usuario']->getNombre() ?>">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?= $_SESSION['usuario']->getApellidos() ?>" placeholder="<?= $_SESSION['usuario']->getApellidos() ?>">
        <label for="contraseña">Contraseña</label>
        <input type="text" name="contraseña" value="<?= $_SESSION['usuario']->getContraseña() ?>" placeholder="<?= $_SESSION['usuario']->getContraseña() ?>">
        <label for="email">Correo electronico</label>
        <input type="text" name="email" value="<?= $_SESSION['usuario']->getEmail() ?>" placeholder="<?= $_SESSION['usuario']->getEmail() ?>">
        <input type="text" name="puntos" value="<?= $_SESSION['usuario']->getPuntos() ?>" placeholder="<?= $_SESSION['usuario']->getPuntos() ?>">
        <input type="hidden" name="id" value="<?= $_SESSION['usuario']->getUsuarioid() ?>">
        <input class="button-submit" type="submit" name="modificarusuario" value="Modificar Usuario">
    </form>
</div>
</div>
