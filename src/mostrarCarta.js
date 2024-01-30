fetch("http://localhost/proyecte1-restaurant/?controller=API&action=getAllProducts")
        .then( data => data.json())
        .then(productos => {
            let divproductos = document.getElementById("divproductos");
            let backupProductos = productos;
            let filtrosCategorias = document.querySelectorAll(".filtroCategorias");
            
            let botonfiltro = document.getElementById("botonfiltro");
            mostrarProductos(productos, divproductos);

            botonfiltro.addEventListener('click', function(filtrosCategorias) {
                let categoriasArray = [];
                filtrosCategorias.forEach(function(filtroCategorias) {
                    console.log("Hola");
                    categoriasArray.push(filtroCategorias.checked);
                })

                productos = productos.filter(producto =>{
                    return categoriasArray[producto.categoria_id-1] == true;
                })

                mostrarProductos(productos, divproductos);
                
            })

            function mostrarProductos(productos, divproductos) {

                productos.forEach(producto => {
                    let divproducto = document.createElement("div");
                    divproducto.classList.add("col-12", "col-sm-12", "col-md-6", "col-lg-4", "div-producto");
                    divproducto.innerHTML = `
                        <div class="div-producto-img">
                            <img src="${producto.img}" alt="Imagen de producto">
                        </div>
                        <div class="div-producto-detalles">
                            <h3>${producto.nombre_producto}</h3>
                            <p>${producto.precio_unidad}€</p>
                        </div>
                        <form action="<?= URL ?>?controller=producto&action=añadirCarrito" method="post">
                            <input type="hidden" name="escondido" value="${producto.producto_id}">
                            <input class="boton-añadir" type="submit" name="añadircarro" value="Añadir al carrito">    
                        </form>`

                    divproductos.appendChild(divproducto);
                })
            }
        })
