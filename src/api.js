fetch("http://localhost/proyecte1-restaurant/?controller=API&action=api")
.then( data => data.json())
.then(reseñas => {
    let contenedornombre = document.getElementById("nombre");
    reseñas.forEach(reseña => {
        contenedornombre.innerHTML += "<p>" + reseña.titulo + "</p>";
    })
})
