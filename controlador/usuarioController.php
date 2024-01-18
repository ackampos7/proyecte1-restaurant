<?php

    include_once 'modelo/usuarioDAO.php';
    
    class usuarioController {

        public static function index() {
            //Comprueba la existencia del controller que se ha llamado y lo incluye si lo encuentra.
            if(!isset($_GET['controller'])) {
                include_once 'vista/header.php';
                include_once 'vista/home.php';
                include_once 'vista/footer.php';
            } else {
                include_once 'vista/header.php';
                include_once 'vista/iniciosesion.php';
                include_once 'vista/footer.php';
            }
        }

        public static function registroVista(){
            //Comprueba la existencia del controller que se ha llamado y lo incluye si lo encuentra.
            if(!isset($_GET['controller'])) {
                include_once 'vista/header.php';
                include_once 'vista/home.php';
                include_once 'vista/footer.php';

            } else {
                include_once 'vista/header.php';
                include_once 'vista/registrosesion.php';
                include_once 'vista/footer.php';
            }
        }

        public static function createNewUser() {

            //Recoge los datos del form de la vista y los envia a usuarioDAO
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $contraseña = $_POST['contraseña'];
            $email = $_POST['email'];
            usuarioDAO::createNewUser($nombre, $apellidos, $contraseña, $email);
            header("Location:".URL."?controller=usuario"); 
        }

        public static function iniciarSesion() {
            //Recoge los datos del form de la vista y los envia a usuarioDAO
            $email = $_POST['email'];
            $contraseña = $_POST['contraseña'];
            usuarioDAO::iniciarSesion($email, $contraseña);
            header("Location:".URL."?controller=home"); 
        }

        public static function cerrarSesion(){
            //Destruye la sesion 
            session_destroy();
            header("Location:".URL."?controller=home"); 
        }

        public static function modificarusuario() {
            //Recoge los datos del form de la vista y los envia a usuarioDAO
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $contraseña = $_POST['contraseña'];
            $email = $_POST['email'];
            $id = $_POST['id'];
            usuarioDAO::modificarUsuario($nombre, $apellidos, $contraseña, $email, $id);
            //Establece el usuario como la sesión
            $usuario = usuarioDAO::getUsuario($id);
            $_SESSION['usuario'] = $usuario;
            header("Location:".URL."?controller=micuenta&action=infocuenta");             
        }
    }


    ?>