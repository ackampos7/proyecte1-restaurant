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

    public static function insertReview($usuarioid, $pedidoid, $nombre, $apellidos, $titulo, $cuerpo, $fecha, $puntuacion) {
        $con = database::connect();
        $stmt = $con->prepare("INSERT INTO reviews (usuario_id, pedido_id, nombre_usuario, apellidos_usuario, titulo, cuerpo, fecha, puntuacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("iisssssi",$usuarioid, $pedidoid, $nombre, $apellidos, $titulo, $cuerpo, $fecha, $puntuacion);
        $stmt->execute();
        $con->close();
        
    }

    public static function encontrarReview($id) {
        $con = database::connect();
        $result = $con->query("SELECT COUNT(*) AS NUMREVIEWS FROM REVIEWS WHERE PEDIDO_ID = '$id';");
        $row = $result->fetch_assoc();
        if($row['NUMREVIEWS'] > 0) {
            return true;
        } else {
            return false;
        }
    }

}













?>