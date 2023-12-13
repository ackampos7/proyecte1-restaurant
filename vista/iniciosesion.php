<?php
    include_once 'vista/header.php';
    include_once 'controlador/usuarioController.php';
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
    <div>
        <h2>Iniciar sesión</h2>
        <form action="<?= URL ?>?controller=usuario&action=iniciarSesion" method="post">
            <input type="text" name="email" placeholder="Dirección de correo electronico">
            <br>
            <input type="password" name="contraseña" placeholder="Contraseña">
            <br>
            <input type="submit" name="iniciarsesion" value="INICIAR SESIÓN">
        </form>
        <p><a href="registrosesion.php">Aún no tienes una cuenta? Crea una aquí</a></p>
    </div>
</body>
</html>