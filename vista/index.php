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
</head>

<?php
    include_once '../config/functions.php';
    include_once '../vista/header.php';

    
?>

<body>
    <section class="row categorias">
        <div class="col-3 col-md-2 col-sm-1 orange">
            <img src="../imagenes/bocatas-home.jpg" class="img-top" alt="">
            <div class="card-body">
                <p class="card-text">Bocadillos</p>
            </div>
        </div>
        <div class="col-3 col-md-2 col-sm-1 orange">
            <img src="../imagenes/tapas-home.jpg" class="img-top" alt="">
            <div class="card-body">
                <p class="card-text">Tapas</p>
            </div>
        </div>
        <div class="col-3 col-md-2 col-sm-1 orange">
            <img src="../imagenes/hamburguesas-home.jpg" class="img-top" alt="">
            <div class="card-body">
                <p class="card-text">Hamburguesas</p>
            </div>
        </div>
    </section>
    <section class="row seccion-card">
            <div class="col-2 col-md-1 col-sm-1 contenedor">
                <h2 class="titulo-seccion">Ultimas noticias</h2>
                <p class="texto-seccion">Conoce las ultimas noticias del Restaurante Ricardo Tormo</p>
                <button type="button "class="boton-vermas">Ver más</button>
            </div>
            <div class="col-2 col-md-1 col-sm-1 div-img-noticias">
                <img src="../imagenes/ultimas-noticias.jpg" class="card-img imgnoticias" alt="">
            </div>
    </section>
    <section class="row section-noticias">
        <div class="col-4 col-md-2 col-sm-1 noticia">
            <img src="../imagenes/noticia1.jpg" class="img-noticia" alt="">
            <div class="div-texto-noticia">
                <h3 class="titulo-noticia">Oferta de buffet libre desde el 3 al 9 de Octubre</h3>
                <p class="texto-noticia">Para celebrar el comienzo de la temporada y disfrutar del otoño, en el Restaurant Ricardo Tormo decidimos ofrecer una oferta de buffet libre desde el 3 al 9 de Octubre por tan solo 6€ por persona</p>
                <p class="keywords-noticia">carta, Ricardo Tormo, ValenciaGP</p>
            </div>
        </div>
        <div class="col-4 col-md-2 col-sm-1 noticia">
            <img src="../imagenes/noticia2.jpg" class="img-noticia" alt="">
            <div class="div-texto-noticia">
                <h3 class="titulo-noticia">El Restaurant acoge el festival de MotoGP España 2023</h3>
                <p class="texto-noticia">El Circuit Ricardo Tormo tiene el placer de acoger el festival de MotoGP España 2023 y para ofrecer a nuestros clientes el mejor servicio en el Restaurant, hemos anunciado cambios en la carta y nuestros servicios.</p>
                <p class="keywords-noticia">carta, Ricardo Tormo, ValenciaGP</p>
            </div>
        </div>
        <div class="col-4 col-md-2 col-sm-1 noticia">
            <img src="../imagenes/noticia3.jpg" class="img-noticia" alt="">
            <div class="div-texto-noticia">
                <h3 class="titulo-noticia">El Restaurant arrasa en los premios Gastronómicos de la Comunitat Valenciana</h3>
                <p class="texto-noticia">Este mes de Octubre se han realizado los premios Gastronómicos de la Comunitat Valenciana y el Restaurant ha arrasado llevandose un total de 7 premios.</p>
                <p class="keywords-noticia">carta, Ricardo Tormo, ValenciaGP</p>
            </div>
        </div>
        <div class="col-4 col-md-2 col-sm-1 noticia">
            <img src="../imagenes/noticia4.jpg" class="img-noticia" alt="">
            <div class="div-texto-noticia">
                <h3 class="titulo-noticia">El Restaurant anuncia nueva seccion de tapas para 2024</h3>
                <p class="texto-noticia">Después de escuchar a nuestros clientes y tener en cuenta su feedback, hemos decidido expandir nuestra sección de tapas, bebidas y comida rápida para así ofrecer un servicio mas ámplio para este 2024.</p>
                <p class="keywords-noticia">carta, Ricardo Tormo, ValenciaGP</p>
            </div>
        </div>
    </section>
    <section class="row section-descubre">
        <div class="col-2 col-md-1 col-sm-1 contenido-descubre">
            <h2 class="titulo-descubre">Descubre el Restaurant Ricardo Tormo</h2>
            <button type="button" class="boton-descubre">Conoce el Restaurant</button>
        </div>
        <div class="col-2 col-md-1 col-sm-1">
            <iframe width="672" height="378" src="">
            </iframe>
        </div>
    </section>
    <section class="seccion-card">
        <div class="contenedor">
            <h2 class="titulo-seccion">Contacto</h2>
            <p class="texto-seccion">Contacta con nosotros a través de atención telefónica o correo electrónico.</p>
            <button type="button "class="boton-vermas">Ver más</button>
        </div>
        <img src="../imagenes/ultimas-noticias.jpg" class="card-img imgnoticias" alt="">
    </section>
    <section class="row seccion-info">
        <div class="col-4 col-md-6 col-sm-12 contenedor-info">
            <h3 class="titulo-info">Localización</h3>
            <p class="texto-info">Autovía A3 Valencia-Madrid, Salida 334. 46380<br><strong>Cheste (Valencia) – España</strong></p>
        </div>
        <div class="col-4 col-md-6 col-sm-12 contenedor-info">
            <h3 class="titulo-info">Horarios</h3>
            <p class="texto-info"><strong>Atención telefónica:</strong><br> de lunes a viernes de 08:00 a 15:00 horas</p>
        </div>
        <div class="col-4 col-md-6 col-sm-12 contenedor-info">
            <h3 class="titulo-info">Contacto</h3>
            <p class="texto-info"><strong>Teléfono:</strong> 96 252 52 20<br><strong>Correo:</strong> contacto@circuitricardotormo.com</p>
        </div>
    </section>
</body>
</html>