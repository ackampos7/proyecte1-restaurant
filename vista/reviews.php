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
            <?php foreach ($reviews as $review) { 
                $user = UsuarioDAO::getUsuarioById($review->getUsuario_id()); 
                $initial = $user->getInitials();
            ?>
            <article class="col-12 col-sm-12 col-md-6 col-lg-4 review">
                <div class="header-review">
                    <div class="intro-review">
                        <div class="d-flex justify-content-start align-items-center info-review">
                            <div class="d-flex justify-content-center align-items-center perfil-review">
                                <p class="m-0"><?php echo $initial ?></p>
                            </div>
                            <div>
                                <p class="m-0"> <b> <?= strtoupper($review->getNombre_usuario())." ".strtoupper($review->getApellidos_usuario()) ?>  </b></p> 
                                <p class="m-0 fecha"><?= $review->getFecha() ?></p> 
                            </div>
                        </div>
                        <p class="display-flex">
                        <?php for($i = 1; $i <= 5; $i++) {
                            if($i <= $review->getPuntuacion()) { ?>
                                <img class="star-img" src="imagenes/star.svg"></img>
                            <?php 
                            }else { 
                            ?>
                                <img class="star-img" src="imagenes/no-star.svg"></img>
                            <?php
                            }
                        } 
                        ?>
                        </p>
                    </div>
                </div>
                <div class="texto-review">
                    <h3><?= $review->getTitulo() ?></h3>
                    <p><?= $review->getCuerpo() ?></p>
                </div>
            </article>
            <?php } ?>
        </div>
        <script>
            function random_bg_color() {
                let perfil = document.getElementsByClassName("perfil-review");
                for(var element of perfil) {
                    var x = Math.floor(Math.random() * 256);
                    var y = Math.floor(Math.random() * 256);
                    var z = Math.floor(Math.random() * 256);
                    var bgColor = "rgb(" + x + "," + y + "," + z + ")";
                    element.style.background = bgColor;
                }
            }

            random_bg_color();
        </script>
    </section> 

