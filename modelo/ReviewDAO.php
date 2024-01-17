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

}













?>