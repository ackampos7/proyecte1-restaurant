<?php

include_once 'modelo/ReviewDAO.php';

    //Controlador de la vista home
    class reviewsController {
        public static function index() {
            //Comprueba la existencia del controller que se ha llamado y lo incluye si lo encuentra.
            if(!isset($_GET['controller'])) {
                include_once '../vista/home.php';
            } else {
                $reviews = ReviewDAO::getAllReviews();
                include_once 'vista/reviews.php';
            }
        }
    }

?>