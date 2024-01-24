let pedidoid = document.getElementById("pedidoid").value;
localStorage.setItem("pedidoid", pedidoid);
qrIMG = document.getElementById("qrimg");
qrIMG.src = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=http://localhost/proyecte1-restaurant/?controller=pedido&action=infoPedido&pedidoid=${pedidoid}`;