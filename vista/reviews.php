    <section class="container-fluid">
        <div class="random-color row div-intro">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center flex-column align-items-start intro-texto">
                <h1 class="">Reseñas</h1>
                <p>Conoce las reseñas del Restaurant Ricardo Tormo</p>
            </div>
            <div class="intro-imagen">
                <img class="col-12 col-sm-12 col-md-6 col-lg-6" src="imagenes/categorias/reseñas.jpg" alt=""></img>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="div-filtros">
            <div class="custom-dropdown">
                <input type="checkbox" id="dropdown-toggle">
                <label for="dropdown-toggle" class="dropdown-label">Puntuación</label>
                <ul class="dropdown-options">
                    <li><div class="dropdown-option filtroPuntuacion" valor="5"><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img></div></li>
                    <li><div class="dropdown-option filtroPuntuacion" valor="4"><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img></div></li>
                    <li><div class="dropdown-option filtroPuntuacion" valor="3"><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img></div></li>
                    <li><div class="dropdown-option filtroPuntuacion" valor="2"><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img></div></li>
                    <li><div class="dropdown-option filtroPuntuacion" valor="1"><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img></div></li>
                    <li><div class="dropdown-option filtroPuntuacion" valor="0">Mostrar todo</div></li>
                    <li><div class="dropdown-option filtroPuntuacion" valor="999">Mayor puntuación</div></li>
                    <li><div class="dropdown-option filtroPuntuacion" valor="-1">Menor puntuación</div></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="row div-reviews" id="div-reviews">
        </div>
    </section>
    
    <script src="src/reseñas.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


