let añadirReseña = document.getElementById("boton-reseña");

añadirReseña.addEventListener("click", () => {
    let tituloreseña = document.getElementById("tituloreseña").value;
    let puntuacionreseña = document.getElementById("puntuacionreseña").value;
    let cuerporeseña = document.getElementById("cuerporeseña").value;

    fetch("http://localhost/proyecte1-restaurant/?controller=API&action=insertarReviews", {
        method: 'POST',
        body: JSON.stringify({
                usuario_id: 111,
                pedido_id: 32,
                nombre_usuario: 'Joel',
                apellidos_usuario: 'Cosp Crespo',
                titulo: tituloreseña,
                cuerpo: cuerporeseña,
                fecha: '2024-01-22',
                puntuacion: puntuacionreseña
        }),
        headers: {
            'Content-Type': 'application/json; charset=UTF-8',
        }
    })
});