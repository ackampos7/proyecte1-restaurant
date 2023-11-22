<?php
    include_once '../controlador/productoController.php';
    include_once '../modelo/Producto.php';
    include_once '../vista/header.php';
    include_once '../config/functions.php';
    $productos = productoDAO::getAllProducts();

    if(isset($_POST['añadircarro'])) {
        $id = $_POST['escondido'];
        productoDAO::añadirCarrito($id);

    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="estilos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Restaurant Ricardo Tormo</title>
</head>
<body>
    
    <h2>Bocadillos</h2>
    <div class="row div-productos">
    <?php
        foreach($productos as $producto) {
            if($producto->getCategoriaId() == 1) {
    ?>
        <div class="col-12 col-md-6">
            <img src=" <?php echo $producto->getImg() ?>" width="300" height="300" alt="">
            <h3><?= $producto->getNombre() ?></h3>
            <p><?= $producto->getPrecioUnidad() ?>€</p>
            <p> <?= $producto->getProductoId() ?> </p>
            <form action="" method="post">
                <input type="hidden" name="escondido" value="<?= $producto->getProductoId() ?>">
                <input type="submit" name="añadircarro" value="Añadir al carrito">
            </form>
        </div>
    <?php
        }  
    }
    ?>  
    </div>

    <h2>Tapas</h2>
    <div class="row div-productos">
    <?php
        foreach($productos as $producto) {
            if($producto->getCategoriaId() == 2) {
    ?>
        <div class="col-12 col-md-6">
            <img src=" <?php echo $producto->getImg() ?>" width="300" height="300" alt="">
            <h3><?= $producto->getNombre() ?></h3>
            <p><?= $producto->getPrecioUnidad() ?>€</p>
            <p> <?= $producto->getProductoId() ?> </p>
            <form action="" method="post">
                <input type="hidden" name="escondido" value="<?= $producto->getProductoId() ?>">
                <input type="submit" name="añadircarro" value="Añadir al carrito">
            </form>
        </div>
    <?php
        }  
    }
    ?>  
    </div>

    <h2>Hamburguesas</h2>
    <div class="row div-productos">
    <?php
        foreach($productos as $producto) {
            if($producto->getCategoriaId() == 3) {
    ?>
        <div class="col-12 col-md-6">
            <img src=" <?php echo $producto->getImg() ?>" width="300" height="300" alt="">
            <h3><?= $producto->getNombre() ?></h3>
            <p><?= $producto->getPrecioUnidad() ?>€</p>
            <p> <?= $producto->getProductoId() ?> </p>
            <form action="" method="post">
                <input type="hidden" name="escondido" value="<?= $producto->getProductoId() ?>">
                <input type="submit" name="añadircarro" value="Añadir al carrito">
            </form>
        </div>
    <?php
        }  
    }
    ?>  
    </div>

    

</body>
</html>