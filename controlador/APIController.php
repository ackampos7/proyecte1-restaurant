<?php

include_once 'modelo/reviewDAO.php';

class APIController {

    public function showReseñas() {
            $reviews = reviewDAO::getAllReviews();
            $reviews = json_encode($reviews, JSON_UNESCAPED_UNICODE);
            header('Content-Type: application/json');
            echo $reviews;
            return;
    }

    public function insertarReseñas() {
        if(isset($_POST['reseña'])) {
            $reseña = $_POST['reseña'];
            $reseña = json_decode($reseña, true);
            reviewDAO::insertReview($reseña);
        }
    }
}

?>