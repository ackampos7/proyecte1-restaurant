<?php
    include_once 'controlador/productoController.php';
    include_once 'modelo/productoDAO.php';
    include_once 'controlador/pedidoController.php';
    include_once 'modelo/pedidoDAO.php';
    include_once 'modelo/Producto.php';
    include_once 'vista/header.php';
    include_once 'config/functions.php';

?>

<section class="container-fluid">
    <div class="row d-flex justify-content-center seccion-presentacion">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 div-presentacion-titulo">
            <h2>La carta</h2>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 div-presentacion-img">
            <img src="imagenes/categorias/categoriacarta.png" alt="Imagen de la seccion de la carta">   
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="filtrosCategorias">
        <input type="checkbox" class="filtroCategorias" valor="1">Bocadillos</input>
        <input type="checkbox" class="filtroCategorias" valor="2">Tapas</input>
        <input type="checkbox" class="filtroCategorias" valor="3">Hamburguesas</input>
        <button id="botonfiltro">Filtrar</button>
    </div>
</section>

<section class="container-fluid">
    <div class="row d-flex justify-content-center seccion-productos" id="divproductos">
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="src/mostrarCarta.js"></script>