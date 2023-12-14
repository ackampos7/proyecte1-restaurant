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

        public static function registroVista(){
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/registrosesion.php';
            }
        }

        public static function createNewUser() {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $contraseña = $_POST['contraseña'];
            $email = $_POST['email'];
            usuarioDAO::createNewUser($nombre, $apellidos, $contraseña, $email);
            header("Location:".URL."?controller=usuario"); 
        }

        public static function iniciarSesion() {
            $email = $_POST['email'];
            $contraseña = $_POST['contraseña'];
            usuarioDAO::iniciarSesion($email, $contraseña);
            header("Location:".URL."?controller=home"); 
        }

        public static function cerrarSesion(){
            session_destroy();
            header("Location:".URL."?controller=home"); 
        }
    }


    ?>