<?php
include_once 'modelo/Usuario.php';


    class Cliente extends Usuario {

        function __construct(){
        }

        public function getLastPedido() {

                $preciototal = $_COOKIE['ultimopedido_'.$this->usuario_id];
                return $preciototal;
        }

        public function verifyCredentials() {
            return false;
        }
       
    }

?>