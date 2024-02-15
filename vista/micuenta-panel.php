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
<h2 class="titulo-admin-seccion">Panel de control</h2>
    <div class="row panel-control">    
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 info-cuenta">
                <h3>Información de la cuenta</h3>
                <p><strong>Nombre: </strong><?php echo $_SESSION['usuario']->getNombre()." ".$_SESSION['usuario']->getApellidos() ?></p>
                <p><strong>Correo electrónico: </strong><?php echo $_SESSION['usuario']->getEmail() ?></p>
                <p><strong>Puntos: </strong><?php echo $_SESSION['usuario']->getPuntos() ?> Puntos</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 ultimo-pedido">
                <h3>Ultimo pedido</h3>
                <?php if(isset($_COOKIE['ultimopedido_'.$_SESSION['usuario']->getUsuarioid()])){   ?>
                <p>Precio total: <?php echo $_COOKIE['ultimopedido_'.$_SESSION['usuario']->getUsuarioid()] ?>€</p>
                <?php }else{ ?>
                <p>Este usuario no ha realizado ningun pedido en las ultimas 24 horas</p>
                <?php } ?>
            </div>
            <?php if(get_class($_SESSION['usuario']) == "Administrador") { ?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 listado-admin">
                <h3>Gestor de administrador</h3>
                <a href="?controller=micuenta&action=gestionProductos">Listado de productos</a>
                <a href="?controller=micuenta&action=gestionUsuarios">Listado de usuarios</a>
            </div>
            <?php } ?>
    </div>
</div>

