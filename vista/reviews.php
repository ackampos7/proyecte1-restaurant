<body>
    <section class="container-fluid">
        <div class="row div-intro">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center flex-column align-items-start intro-texto">
                <h1>Reseñas</h1>
                <p>Conoce las reseñas del Restaurant Ricardo Tormo</p>
            </div>
            <div class="intro-imagen">
                <img class="col-12 col-sm-12 col-md-6 col-lg-6" src="imagenes/placeholder.jpg" alt=""></img>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="row div-reviews">
            <?php foreach ($reviews as $review) { ?>
            <article class="col-12 col-sm-12 col-md-6 col-lg-4 review">
                <h3 class=""><?= $review->getNombre_usuario()." ".$review->getApellidos_usuario() ?></h3>
                <p class=""><?= $review->getTitulo() ?></p>
                <p class=""><?= $review->getCuerpo() ?></p>
                <p class=""><?= $review->getFecha() ?></p>
                <p class=""><?= $review->getPuntuacion() ?></p>

            </article>
            <?php } ?>
        </div>
    </section> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

