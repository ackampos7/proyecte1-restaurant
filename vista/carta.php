<?php
    include_once '../controlador/productoController.php';
    include_once '../modelo/productoDAO.php';
    include_once '../controlador/pedidoController.php';
    include_once '../modelo/pedidoDAO.php';
    include_once '../modelo/Producto.php';
    //include_once '../vista/header.php';
    include_once '../config/functions.php';
    
    $productos = productoDAO::getAllProducts();

    if(isset($_POST['añadircarro'])) {
        $id = $_POST['escondido'];
        pedidoController::añadirCarrito($id);
        header('Location: ../vista/carta.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><link href="../css/carta.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Restaurant Ricardo Tormo</title>
</head>
<body>

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

<section class="container-fluid">
    <div class="row d-flex justify-content-center seccion-productos">
    <?php
        foreach($productos as $producto) {
            if($producto->getCategoriaId() == 1) {
    ?>
        <div class="col-12  col-sm-12 col-md-6 col-lg-4 div-producto">
            <div class="div-producto-img">
                <img src=" <?php echo $producto->getImg() ?>" alt="Imagen de bocadillo vegetal">
            </div>
            <div class="div-producto-detalles">
                <h3><?= $producto->getNombre() ?></h3>
                <p><?= $producto->getPrecioUnidad() ?>€</p>
                <form action="" method="post">
                    <input type="hidden" name="escondido" value="<?= $producto->getProductoId() ?>">
                    <input type="submit" name="añadircarro" value="Añadir al carrito">
                </form>
            </div>
        </div>
    <?php
        }  
    }
    ?>  
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>