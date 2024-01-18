    <section class="container-fluid">
        <div class="random-color row div-intro">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center flex-column align-items-start intro-texto">
                <h1 class="">Reseñas</h1>
                <p>Conoce las reseñas del Restaurant Ricardo Tormo</p>
            </div>
            <div class="intro-imagen">
                <img class="col-12 col-sm-12 col-md-6 col-lg-6" src="imagenes/placeholder.jpg" alt=""></img>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="div-filtros">
            <div class="custom-dropdown">
                <input type="checkbox" id="dropdown-toggle">
                <label for="dropdown-toggle" class="dropdown-label">Puntuación</label>
                <ul class="dropdown-options">
                    <li><div class="dropdown-option" onclick="handleOption(5)"><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img></div></li>
                    <li><div class="dropdown-option" onclick="handleOption(4)"><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img></div></li>
                    <li><div class="dropdown-option" onclick="handleOption(3)"><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img></div></li>
                    <li><div class="dropdown-option" onclick="handleOption(2)"><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img></div></li>
                    <li><div class="dropdown-option" onclick="handleOption(1)"><img class="star-img" src="imagenes/star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img><img class="star-img" src="imagenes/no-star.svg"></img></div></li>
                    <li><div class="dropdown-option" onclick="handleOption(0)">Mostrar todo</div></li>
                </ul>
            </div>
            <div class="custom-dropdown">
                <input type="checkbox" id="dropdown-toggle">
                <label for="dropdown-toggle" class="dropdown-label">Ordenar por:</label>
                <ul class="dropdown-options">
                    <li><div class="dropdown-option" onclick="handleOption(0)">Mayor puntuación</div></li>
                    <li><div class="dropdown-option" onclick="handleOption(0)">Menor puntuación</div></li>
                    <li><div class="dropdown-option" onclick="handleOption(0)">Por defecto</div></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="div-reviews" id="div-reviews">
        </div>
    </section>
    
    <script src="src/api.js"></script>

