const url = new URLSearchParams(window.location.search);
const pedidoid = url.get("pedidoid");

fetch(`http://localhost/proyecte1-restaurant/?controller=API&action=getInfoPedido&pedidoid=${pedidoid}`)
        .then( data => data.json())
        .then(info => {
            
        })
