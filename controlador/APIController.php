<?php

include_once 'modelo/reviewDAO.php';
include_once 'modelo/pedidoDAO.php';

class APIController {

    public function showReseñas() {
            $reviews = reviewDAO::getAllReviews();
            $reviews = json_encode($reviews, JSON_UNESCAPED_UNICODE);
            header('Content-Type: application/json');
            echo $reviews;
            return;
    }

    public function getInfoPedido() {
        $id = $_GET['pedidoid'];
        $infopedido = pedidoDAO::getInfoPedido($id);
        $infopedido = json_encode($infopedido, JSON_UNESCAPED_UNICODE);
        header('Content-Type: application/json');
        echo $infopedido;
        return;
    }

    public function insertarReviews() {
    
            $data = json_decode(file_get_contents('php://input'), true);

            $usuarioid = $data['usuario_id'];
            $pedidoid = $data['pedido_id'];
            $nombre = $data['nombre_usuario'];
            $apellidos = $data['apellidos_usuario'];
            $titulo = $data['titulo'];
            $cuerpo = $data['cuerpo'];
            $fecha = $data['fecha'];
            $puntuacion = $data['puntuacion'];

            reviewDAO::insertReview($usuarioid, $pedidoid, $nombre, $apellidos, $titulo, $cuerpo, $fecha, $puntuacion);
    }
}

?>