<?php
    include_once 'controlador/productoController.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>TABLA DE PRODUCTOS</title>
</head>
<body>
    <?php
        $products = productoDAO::getAllProducts();
        foreach($products as $product) {
            if()
        }
    ?>
</body>
</html>