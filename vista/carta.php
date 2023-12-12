<?php
    include_once 'controlador/productoController.php';
    include_once 'modelo/productoDAO.php';
    include_once 'controlador/pedidoController.php';
    include_once 'modelo/pedidoDAO.php';
    include_once 'modelo/Producto.php';
    include_once 'vista/header.php';
    include_once 'config/functions.php';

    if(isset($_POST['añadircarro'])) {
        $id = $_POST['escondido'];
        pedidoController::añadirCarrito($id);
        header('Location: ../vista/carta.php');
    }
?>

<section class="container-fluid">
    <div class="row d-flex justify-content-center seccion-categoria">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 div-categoria-titulo">
            <h2>Bocadillos</h2>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 div-categoria-img">
            <img src="../imagenes/categorias/categoriabocadillos.png" alt="Imagen de la categoria de bocadillos">
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row d-flex justify-content-center seccion-productos">
    <?php
        foreach($productos as $producto) {
            if($producto->getCategoriaId() == 1) {
    ?>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 div-producto">
            <div class="div-producto-img">
                <img src=" <?php echo $producto->getImg() ?>" alt="Imagen de bocadillo vegetal">
            </div>
            <div class="div-producto-detalles">
                <h3><?= $producto->getNombre() ?></h3>
                <p><?= $producto->getPrecioUnidad() ?>€</p>
            </div>
            <form action="" method="post">
                <input type="hidden" name="escondido" value="<?= $producto->getProductoId() ?>">
                <input class="boton-añadir" type="submit" name="añadircarro" value="Añadir al carrito">    
            </form>
        </div>
    <?php
        }  
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
            <img src="../imagenes/categorias/categoriabocadillos.png" alt="Imagen de la categoria de bocadillos">
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row d-flex justify-content-center seccion-productos">
    <?php
        foreach($productos as $producto) {
            if($producto->getCategoriaId() == 2) {
    ?>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 div-producto">
            <div class="div-producto-img">
                <img src=" <?php echo $producto->getImg() ?>" alt="Imagen de bocadillo vegetal">
            </div>
            <div class="div-producto-detalles">
                <h3><?= $producto->getNombre() ?></h3>
                <p><?= $producto->getPrecioUnidad() ?>€</p>
            </div>
            <form action="" method="post">
                <input type="hidden" name="escondido" value="<?= $producto->getProductoId() ?>">
                <input class="boton-añadir" type="submit" name="añadircarro" value="Añadir al carrito">    
            </form>
        </div>
    <?php
        }  
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
            <img src="../imagenes/categorias/categoriabocadillos.png" alt="Imagen de la categoria de bocadillos">
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row d-flex justify-content-center seccion-productos">
    <?php
        foreach($productos as $producto) {
            if($producto->getCategoriaId() == 3) {
    ?>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 div-producto">
            <div class="div-producto-img">
                <img src=" <?php echo $producto->getImg() ?>" alt="Imagen de bocadillo vegetal">
            </div>
            <div class="div-producto-detalles">
                <h3><?= $producto->getNombre() ?></h3>
                <p><?= $producto->getPrecioUnidad() ?>€</p>
            </div>
            <form action="" method="post">
                <input type="hidden" name="escondido" value="<?= $producto->getProductoId() ?>">
                <input class="boton-añadir" type="submit" name="añadircarro" value="Añadir al carrito">    
            </form>
        </div>
    <?php
        }  
    }
    ?>  
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>