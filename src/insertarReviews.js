let añadirReseña = document.getElementById("boton-reseña");

añadirReseña.addEventListener("click", () => {
    let tituloreseña = document.getElementById("tituloreseña").value;
    let puntuacionreseña = document.getElementById("puntuacionreseña").value;
    let cuerporeseña = document.getElementById("cuerporeseña").value;
    let usuarioid = document.getElementById("usuarioidreseña").value;
    let nombre = document.getElementById("nombrereseña").value;
    let apellidos = document.getElementById("apellidosreseña").value;
    let pedidoid = document.getElementById("pedidoidreseña").value;

    let date = new Date();
    let year = date.getFullYear();
    let month = String(date.getMonth() + 1).padStart(2, '0');
    let day = String(date.getDate()).padStart(2, '0');
    let fecha = year + "-" + month + "-" + day; 

    fetch("http://localhost/proyecte1-restaurant/?controller=API&action=insertarReviews", {
        method: 'POST',
        body: JSON.stringify({
                usuario_id: usuarioid,
                pedido_id: 32,
                nombre_usuario: nombre,
                apellidos_usuario: apellidos,
                titulo: tituloreseña,
                cuerpo: cuerporeseña,
                fecha: fecha,
                puntuacion: puntuacionreseña
        }),
        headers: {
            'Content-Type': 'application/json; charset=UTF-8',
        }
    })
});