<section class="container-fluid">
    <input type="hidden" id="pedidoid" value="<?= strval($_SESSION['pedidoid']) ?>"></input>
    <div class="div-finalizarpedido">
        <h2>Tu pedido ha sido realizado</h2>
        <p>Muchas gracias por tu compra! Utiliza el código QR generado para consultar información del pedido que acabas de finalizar o escribe una reseña con tu opinión sobre nuestro servicio.</p>
        <div id="divQR">
            <img src="" id="qrimg">
        </div>
        <div class="div-finalizadobuttons">
            <a class="finalizado-button" href="?controller=producto">Volver a la carta</a>
            <a class="finalizado-button" href="?controller=reviews&action=añadirReseña">Escribir reseña</a>
        </div>
    </div>
</section>
<script src="src/QRGenerator.js"></script>