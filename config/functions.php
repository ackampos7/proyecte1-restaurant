<?php
    include_once 'modelo/Administrador.php';
    include_once 'modelo/Cliente.php';

//Se encarga de iniciar la sesión e inicializar el carrito.

session_start();


if(!isset($_SESSION["pedido"])) {
    $_SESSION["pedido"] = array(array());
    array_pop($_SESSION['pedido']);
}

?>