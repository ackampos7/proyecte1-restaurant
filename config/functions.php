<?php
    include_once 'modelo/Administrador.php';
    include_once 'modelo/Cliente.php';

session_start();


if(!isset($_SESSION["pedido"])) {
    $_SESSION["pedido"] = array(array());
    array_pop($_SESSION['pedido']);
}

?>