<?php

include_once 'modelo/reviewDAO.php';

class APIController {

    public function api() {
            $reviews = reviewDAO::getAllReviews();
            $reviews = json_encode($reviews, JSON_UNESCAPED_UNICODE);
            header('Content-Type: application/json');
            echo $reviews;
            return;
    }
}

?>