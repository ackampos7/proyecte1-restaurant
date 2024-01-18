fetch("http://localhost/proyecte1-restaurant/?controller=API&action=api")
        .then( data => data.json())
        .then(reseñas => {
            let divreviews = document.getElementById("div-reviews");
            let filtrosPuntuacion = document.querySelectorAll(".filtroPuntuacion");
            let valor = 0;
            filtrosPuntuacion.forEach(function(filtroPuntuacion) {
                filtroPuntuacion.addEventListener('click', function() {
                    valor = this.getAttribute("valor");
                    reseñas = reseñas.filter((e) => e.puntuacion == valor)
                })
            })


            reseñas.forEach(reseña => {
                let review = document.createElement("article");
                review.classList.add("review", "col-12", "col-sm-12", "col-md-6", "col-lg-4");

                review.innerHTML = 
                `<div class="header-review">
                    <div class="intro-review">
                        <div class="d-flex justify-content-start align-items-center info-review">
                            <div class="d-flex justify-content-center align-items-center perfil-review">
                                <p class="m-0">A</p>
                            </div>
                            <div>  
                                <p class="m-0"> <b>${reseña.nombre_usuario} ${reseña.apellidos_usuario} </b></p> 
                                <p class="m-0 fecha">${reseña.fecha}</p>
                            </div>
                        </div>
                        <p class="display-flex contenido-puntuacion" id=""></p>
                    </div>
                </div>
                <div class="texto-review">
                    <h3>${reseña.titulo}</h3>
                    <p>${reseña.cuerpo}</p>
                </div>`

                let contenidopuntuacion = review.querySelector('.contenido-puntuacion');
                for(let i = 1; i <= 5; i++) {
                    
                    if(i <= reseña.puntuacion) {
                        contenidopuntuacion.innerHTML += `<img class="star-img" src="imagenes/star.svg"></img>`; 
                    } else {
                        contenidopuntuacion.innerHTML += `<img class="star-img" src="imagenes/no-star.svg"></img>`; 
                    }

                }
                divreviews.appendChild(review);




            })
        })
