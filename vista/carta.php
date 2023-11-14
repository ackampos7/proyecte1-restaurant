<?php
    include_once '../controlador/productoController.php';
    include_once '../modelo/Producto.php';
    include_once '../vista/header.php';
    $productos = productoDAO::getAllProducts();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Circuit Ricardo Tormo</title>
</head>
<body>
    <h2>Bocadillos</h2>
    <div class="row div-productos">
    <?php
        foreach($productos as $producto) {
            if($producto->getCategoriaId() == 1) {
    ?>
        <div class="col-12 col-md-6 col-lg-3">
            <img src=" <?php echo $producto->getImg() ?>" width="300" height="300" alt="">
            <h3><?=$producto->getNombre()?></h3>
            <p><?=$producto->getPrecioUnidad()?></p>
            <form action="" method="post">
                <input type="hidden" name="escondido" value="<?= $product->getProductoId()?>">
                <input type="submit" name="añadircarro" value="Añadir al carrito">
            </form>
        </div>
    <?php
        }  
    }
    ?>  
    </div>

    <h2>Tapas</h2>
    <?php
        foreach($productos as $producto) {
            if($producto->getCategoriaId() == 2) {
    ?>
        <div>
            <h3><?=$producto->getNombre()?></h3>
            <p><?=$producto->getPrecioUnidad()?></p>
        </div>
        <form action="" method="post">
            <input type="submit" name="añadircarro" value="">
        </form>

    <?php
        }  
    }
    ?>

    <h2>Hamburguesas</h2>

    <?php
        foreach($productos as $producto) {
            if($producto->getCategoriaId() == 3) {
    ?>
        <div>
            <h3><?=$producto->getNombre()?></h3>
            <p><?=$producto->getPrecioUnidad()?></p>
        </div>
        <form action="" method="post">
            <input type="submit" name="añadircarro" value="">
        </form>

    <?php
        }  
    }

    if(isset($_POST['añadircarro'])) {
        $id = $_POST['escondido'];
        productoController::añadirCarrito($id);
        header("Location: carta.php");
    }

    ?>

</body>
</html>