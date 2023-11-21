<?php
    include_once '../config/functions.php';
    include_once '../vista/header.php';
    include_once '../controlador/productoController.php';
?>

<!DOCTYPE html>
<html lang="en">
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

<?php
    var_dump($_SESSION['pedido']);
    echo "<br>";

    foreach($_SESSION['pedido'] as $p) {
        var_dump($p);
        $productoCarro = productoDAO::getProductById($p[0]);
    ?>

    <div class="producto-carrito">
        <img src=" <?php echo $productoCarro->getImg() ?>" width="150" height="150" alt="">
        <p><?= $productoCarro->getNombre() ?></p>
        <form method="post">
            <input type="hidden" name="idescondido" value="<?= $productoCarro->getProductoId() ?>">
            <input type="submit" name="añadircantidad" value="+">        
            <input type="submit" name="reducircantidad" value="-">
            <input type="submit" name="borrarsesion" value="B">
        </form>
        <p><?= $productoCarro->getPrecioUnidad() ?>€</p>
    </div>

    <?php
    }
?>

<?php
    if(isset($_POST['borrarsesion'])){
        echo "Hola";
        $_SESSION['pedido'] = [];
        session_unset();
        session_destroy();
    }
?>

</body>
</html>