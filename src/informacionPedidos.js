const url = new URLSearchParams(window.location.search);
const pedidoid = url.get("pedidoid");

fetch(`http://localhost/proyecte1-restaurant/?controller=API&action=getInfoPedido&pedidoid=${pedidoid}`)
        .then( data => data.json())
        .then(info => {
            let infopedido = document.getElementById("info-contenedor");
            let infogeneral = document.createElement("div");
            infogeneral.innerHTML = `
                <h2 style="color: #ff7900; padding: 10px;">INFORMACION PEDIDO</h2>
                <br>
                <p><strong>ID Pedido:</strong> ${info[0].pedido_id}</p>
                <p><strong>Fecha del pedido:</strong> ${info[0].fecha}</p>
                <p><strong>Precio total: </strong>${info[0].precio_total}€</p>
                <hr style="border: dashed 2px black">`;
            infopedido.appendChild(infogeneral);

            info.forEach(infoproductos => {
                let infoproducto = document.createElement("div");
                infoproducto.innerHTML = `
                <p><strong>Nombre del producto:</strong> ${infoproductos.nombre}</p>
                <p><strong>Cantidad: </strong> ${infoproductos.cantidad}</p>
                <p><strong>Precio Unitario </strong>: ${infoproductos.precio}€</p>
                <hr style="border: dashed 2px black">`;
                infopedido.appendChild(infoproducto);
            })

        })
