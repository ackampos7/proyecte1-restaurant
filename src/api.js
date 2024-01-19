fetch("http://localhost/proyecte1-restaurant/?controller=API&action=api")
        .then( data => data.json())
        .then(reseñas => {
            let divreviews = document.getElementById("div-reviews");
            let backupReseñas = reseñas;
            let filtrosPuntuacion = document.querySelectorAll(".filtroPuntuacion");
            let valor = 0;
            mostrarReseñas(reseñas, divreviews);
            filtrosPuntuacion.forEach(function(filtroPuntuacion) {
                filtroPuntuacion.addEventListener('click', function() {
                    reseñas = backupReseñas;
                    valor = this.getAttribute("valor");
                    if(valor == 999) {
                        reseñas.sort((a, b) => b.puntuacion - a.puntuacion);
                    } else if(valor == -1) {
                        reseñas.sort((a, b) => a.puntuacion - b.puntuacion);
                    } else {
                        reseñas = reseñas.filter(reseña => {
                            if(valor == 0) {
                                return true;
                            }
    
                            return reseña.puntuacion == valor;
                        });
                    }

                    mostrarReseñas(reseñas, divreviews);
                })
            })

            function mostrarReseñas(reseñas, divreviews) {
                divreviews.innerHTML = "";
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
            }

        })
