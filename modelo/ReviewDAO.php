<?php

include_once 'config/database.php';
include_once 'config/functions.php';
include_once 'modelo/Review.php';

class ReviewDAO {
    public static function getAllReviews() {
        //Obtiene todos las reviews de la base de datos y los devuelve en forma de array
        $con = dataBase::connect();

        if($result = $con->query("SELECT * FROM REVIEWS;")) {
            $reviews = array();
            while ($review = $result->fetch_assoc()) {
                $reviews[] = $review;
            }
            return $reviews;
        }
    }

    public static function insertReview($reviews) {
        $con = database::connect();
        foreach($review as $review) {
            $usuarioid = $row['usuario_id'];
            $pedidoid = $row['pedido_id'];
            $nombre = $row['nombre_usuario'];
            $apellidos = $row['apellidos_usuario'];
            $titulo = $row['titulo'];
            $cuerpo = $row['cuerpo'];
            $fecha = $row['fecha'];
            $puntuacion = $row['puntuacion'];

            $result = $con->query("INSERT INTO REVIEWS (usuario_id, pedido_id, nombre_usuario, apellidos_usuario, titulo, cuerpo, fecha, puntuacion) VALUES ('$usuarioid', '$pedidoid', '$nombre', '$apellidos', '$ittulo', '$cuerpo', '$fecha', '$puntuacion')");

        }

        
    }

}













?>