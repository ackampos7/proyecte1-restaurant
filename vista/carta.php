<?php
    include_once 'controlador/productoController.php';
    include_once 'modelo/productoDAO.php';
    include_once 'controlador/pedidoController.php';
    include_once 'modelo/pedidoDAO.php';
    include_once 'modelo/Producto.php';
    include_once 'vista/header.php';
    include_once 'config/functions.php';

?>

<section class="container-fluid">
    <div class="row d-flex justify-content-center seccion-categoria">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 div-categoria-titulo">
            <h2>Bocadillos</h2>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 div-categoria-img">
            <img src="imagenes/categorias/categoriabocadillos.png" alt="Imagen de la categoria de bocadillos">
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row d-flex justify-content-center seccion-productos">
    <?php
        foreach($bocadillos as $bocadillo) {
    ?>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 div-producto">
            <div class="div-producto-img">
                <img src=" <?php echo $bocadillo->getImg() ?>" alt="Imagen de producto">
            </div>
            <div class="div-producto-detalles">
                <h3><?= $bocadillo->getNombre() ?></h3>
                <p><?= $bocadillo->getPrecioUnidad() ?>€</p>
            </div>
            <form action="<?= URL ?>?controller=producto&action=añadirCarrito" method="post">
                <input type="hidden" name="escondido" value="<?= $bocadillo->getProductoId() ?>">
                <input class="boton-añadir" type="submit" name="añadircarro" value="Añadir al carrito">    
            </form>
        </div>
    <?php
        }
    ?>  
    </div>
</div>

<section class="container-fluid">
    <div class="row d-flex justify-content-center seccion-categoria">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 div-categoria-titulo">
            <h2>Tapas</h2>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 div-categoria-img">
            <img src="imagenes/categorias/tapas.png" alt="Imagen de producto">
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row d-flex justify-content-center seccion-productos">
    <?php
        foreach($tapas as $tapa) {
    ?>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 div-producto">
            <div class="div-producto-img">
                <img src=" <?php echo $tapa->getImg() ?>" alt="Imagen de producto">
            </div>
            <div class="div-producto-detalles">
                <h3><?= $tapa->getNombre() ?></h3>
                <p><?= $tapa->getPrecioUnidad() ?>€</p>
            </div>
            <form action="<?= URL ?>?controller=producto&action=añadirCarrito" method="post">
                <input type="hidden" name="escondido" value="<?= $tapa->getProductoId() ?>">
                <input class="boton-añadir" type="submit" name="añadircarro" value="Añadir al carrito">    
            </form>
        </div>
    <?php
        }  
    ?>  
    </div>
</div>

<section class="container-fluid">
    <div class="row d-flex justify-content-center seccion-categoria">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 div-categoria-titulo">
            <h2>Hamburguesas</h2>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 div-categoria-img">
            <img src="imagenes/categorias/hamburguesas.png" alt="Imagen de la categoria de bocadillos">
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row d-flex justify-content-center seccion-productos">
    <?php
        foreach($hamburguesas as $hamburguesa) {
    ?>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 div-producto">
            <div class="div-producto-img">
                <img src=" <?php echo $hamburguesa->getImg() ?>" alt="Imagen de bocadillo vegetal">
            </div>
            <div class="div-producto-detalles">
                <h3><?= $hamburguesa->getNombre() ?></h3>
                <p><?= $hamburguesa->getPrecioUnidad() ?>€</p>
            </div>
            <form action="<?= URL ?>?controller=producto&action=añadirCarrito" method="post">
                <input type="hidden" name="escondido" value="<?= $hamburguesa->getProductoId() ?>">
                <input class="boton-añadir" type="submit" name="añadircarro" value="Añadir al carrito">    
            </form>
        </div>
    <?php
        }  
    ?>  
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>