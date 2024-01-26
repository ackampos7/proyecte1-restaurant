const url = new URLSearchParams(window.location.search);
const pedidoid = url.get("pedidoid");

fetch(`http://localhost/proyecte1-restaurant/?controller=API&action=getInfoPedido&pedidoid=${pedidoid}`)
        .then( data => data.json())
        .then(info => {
            let infopedido = document.getElementById("info-contenedor");
            let infogeneral = document.createElement("div");
            infogeneral.innerHTML = `<p>${info[0].pedido_id}</p>
                <p>${info[0].fecha}</p>
                <p>${info[0].precio_total}</p>`;
            infopedido.appendChild(infogeneral);

            info.forEach(infoproductos => {
                let infoproducto = document.createElement("div");
                infoproducto.innerHTML = `<p>${infoproductos.nombre}</p>
                <p>${infoproductos.cantidad}</p>
                <p>${infoproductos.precio}</p>`
                infopedido.appendChild(infoproducto);
            })

        })
