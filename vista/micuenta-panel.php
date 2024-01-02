<div class="container-fluid">
    <h1 class="mi-cuenta">Mi cuenta</h1>
    <div class="micuenta-menu">
        <ul class="row pestañas">
            <a class="col-12 col-md-6 col-lg-3 seccion-pestaña" href="?controller=micuenta">
                <li>Panel de control</li>
            </a>
            <a class="col-12 col-md-6 col-lg-3 seccion-pestaña" href="?controller=micuenta&action=infocuenta">
                <li>Información de la cuenta</li>
            </a>            
            <a class="col-12 col-md-6 col-lg-3 seccion-pestaña" href="?controller=micuenta&action=panelcontrol">
                <li>Mis pedidos</li>
            </a>
            <a class="col-12 col-md-6 col-lg-3 seccion-pestaña" href="?controller=usuario&action=cerrarSesion">
                <li>Cerrar sesión</li>
            </a>
        </ul>
    </div>
</div>
<div class="container-fluid">
    <h2>Panel de control</h2>
    <div class="panel-control">    
            <div class="info-cuenta">
                <h3>Información de la cuenta</h3>
                <p><?php echo $_SESSION['usuario']->getNombre()." ".$_SESSION['usuario']->getApellidos() ?></p>
                <p><?php echo $_SESSION['usuario']->getEmail() ?></p>
            </div>
            <div class="ultimo-pedido">
                <h3>Ultimo pedido</h3>
                <p>Precio total: <?php echo $_COOKIE['ultimopedido'] ?>€</p>
            </div>
            <?php if(get_class($_SESSION['usuario']) == "Administrador") { ?>
            <div class="listado-admin">
                <h3>Gestor de administrador</h3>
                <a href="?controller=micuenta&action=gestionProductos">Listado de productos</a>
                <a href="?controller=micuenta&action=gestionPedidos">Listado de pedidos</a>
                <a href="?controller=micuenta&action=gestionUsuarios">Listado de usuarios</a>
            </div>
            <?php } ?>
    </div>
</div>

