<?php
    include_once '../vista/header.php';
    include_once '../controlador/usuarioController.php';

    if(isset($_POST['crearcuenta'])) {
        if(isset($_POST['nombre'], $_POST['apellidos'], $_POST['contraseña'], $_POST['email'])){
            usuarioController::createNewUser($_POST['nombre'], $_POST['apellidos'], $_POST['contraseña'], $_POST['email']);
        }
        header('Location: ../vista/iniciosesion.php');
    }
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
        <h2>Crear una cuenta</h2>
        <p><a href="iniciosesion.php">Ya tienes una cuenta? Inicia sesión aquí</a></p>
        <form method="post">
            <input type="text" name="nombre" placeholder="Nombre">
            <br>
            <input type="text" name="apellidos" placeholder="Apellidos">
            <br>
            <input type="password" name="contraseña" placeholder="Contraseña">
            <br>
            <input type="text" name="email" placeholder="Dirección de correo electrónico">
            <br>
            <input type="submit" name="crearcuenta" value="CREAR CUENTA">
        </form>
    </div>
    
</body>
</html>