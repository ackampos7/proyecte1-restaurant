<?php

    include_once '../modelo/usuarioDAO.php';
    
    class usuarioController {

        public static function createNewUser($nombre, $apellidos, $contraseña, $email) {
            usuarioDAO::createNewUser($nombre, $apellidos, $contraseña, $email);
        }

        public static function iniciarSesion($email, $contraseña) {
            usuarioDAO::iniciarSesion($email, $contraseña);
        }
    }


    ?>