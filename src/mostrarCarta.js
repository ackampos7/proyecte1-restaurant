fetch("http://localhost/proyecte1-restaurant/?controller=API&action=getAllProducts")
        .then( data => data.json())
        .then(productos => {
            let divproductos = document.getElementById("divproductos");
            mostrarProductos(productos, divproductos);

            function mostrarProductos(productos, divproductos) {
                let producto = document.createElement("article");
                producto.classList.add("col-12", "col-sm-12", "col-md-6", "col-lg-4", "div-producto");
                producto.innerHTML = `
                    <div class="div-producto-img">
                        <img src="${producto.img}" alt="Imagen de producto">
                    </div>
                    <div class="div-producto-detalles">
                        <h3>${producto.nombre}</h3>
                        <p>${producto.precio_unidad}€</p>
                    </div>
                    <form action="<?= URL ?>?controller=producto&action=añadirCarrito" method="post">
                        <input type="hidden" name="escondido" value="${producto.producto_id}">
                        <input class="boton-añadir" type="submit" name="añadircarro" value="Añadir al carrito">    
                    </form>`;

                    divproductos.appendChild(producto);
            }
        })
