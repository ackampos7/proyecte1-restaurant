<?php
include_once 'modelo/Usuario.php';

    class Administrador extends Usuario {


        function __construct(){
        }

        public function verifyCredentials() {
                return true;
        }

    }

?>