<?php
include_once 'modelo/Usuario.php';

    class Administrador extends Usuario {


        function __construct(){
        }

        public function verifyCredentials() {
                if($this->rol == "Administrador") {
                        return true;
                } else if($this->rol == "Cliente") {
                        return false;
                }
        }

    }

?>