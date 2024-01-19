let añadirReseña = document.getElementById("boton-reseña");

añadirReseña.addEventListener('click', function() {
    fetch("http://localhost/proyecte1-restaurant/?controller=API&action=insertarReseñas", {
        method: 'POST',
        body: JSON.stringify({
            reseña: {
                usuario_id: 9999,
                pedido_id: 33,
                nombre_usuario: 'Antonio',
                apellidos_usuario: 'Canovas del Castillo',
                titulo: 'Primero de todo, buenas tardes',
                cuerpo: 'Hola dios estoy aqui, gracias te doy por darme la vida hazla nueva todos los dias buenas tardes mi señor',
                fecha: '2024-03-23',
                puntuacion: 3
            }
        }),
        headers: {
            'Content-type': 'application/json; charset=UTF-8',
        },
    })
})