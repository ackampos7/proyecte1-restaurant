<?php

    include_once 'modelo/usuarioDAO.php';
    
    class usuarioController {

        public static function index() {
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/iniciosesion.php';
            }
        }

        public static function createNewUser($nombre, $apellidos, $contraseña, $email) {
            usuarioDAO::createNewUser($nombre, $apellidos, $contraseña, $email);
        }

        public static function iniciarSesion() {
            $email = $_POST['email'];
            $contraseña = $_POST['contraseña'];
            usuarioDAO::iniciarSesion($email, $contraseña);
            header("Location:".URL."?controller=home"); 
        }

        public static function cerrarSesion(){
            usuarioDAO::cerrarSesion();
        }
    }


    ?>