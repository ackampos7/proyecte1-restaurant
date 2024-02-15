<section class="container-fluid">
    <div class="container">
        <div class="forms">
            <div class="form-reseña">
                <h2>Añadir Reseña</h2>
                <div class="d-flex formreseñas">
                    <div>
                        <label for="titulo">Titulo</label>
                        <br>
                        <input class="input-reseña" id="tituloreseña" type="text"></input>
                    </div>
                    <div>
                        <label for="puntuacion">Puntuacion</label>
                        <br>
                        <select name="puntuacion" id="puntuacionreseña" class="select-puntuacion">
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <label for="descripcion">Descripcion</label>
                <input class="input-cuerpo" id="cuerporeseña" type="text"></input>
                <input type="hidden" id="usuarioidreseña" value="<?= $_SESSION['usuario']->getUsuarioid() ?>"></input>
                <input type="hidden" id="nombrereseña" value="<?= $_SESSION['usuario']->getNombre() ?>"></input>
                <input type="hidden" id="apellidosreseña" value="<?= $_SESSION['usuario']->getApellidos() ?>"></input>
                <input type="hidden" id="pedidoidreseña" value="<?= $_SESSION['pedidoid'] ?>"></input>
                <button class="finalizado-button small" id="boton-reseña">Enviar</button>

            </div>
        </div>
    </div>    
</section>
<script src="src/insertarReviews.js"></script>
<script src="https://unpkg.com/notie"></script>
