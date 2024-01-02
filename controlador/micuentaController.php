<?php

    include_once 'modelo/pedidoDAO.php';
    include_once 'modelo/productoDAO.php';
    include_once 'modelo/usuarioDAO.php';
    include_once 'config/functions.php';


    class micuentaController {
        public static function index() {
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/micuenta-panel.php';
            }
        }

        public static function infocuenta() {
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/micuenta-info.php';
            }
        }

        public static function gestionProductos() {
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                $productos = productoDAO::getAllProducts();
                include_once 'vista/gestionProductos.php';
            }
        }

        public static function gestionUsuarios() {
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                $usuarios = usuarioDAO::getAllUsuarios();
                include_once 'vista/gestionUsuarios.php';
            }
        }

        public static function adminProducto(){

            $id = $_POST['idescondido'];

            if(isset($_POST['modificar'])){
                $producto = productoDAO::getProductById($id);
                include_once 'vista/modificarproducto.php';
            } else if(isset($_POST['eliminar'])){
                micuentaController::eliminar($id);
            }
        }

        public static function adminUsuario(){

            $id = $_POST['idescondido'];

            if(isset($_POST['modificar'])){
                $usuario = usuarioDAO::getUsuarioById($id);
                include_once 'vista/modificarusuario.php';
            } else if(isset($_POST['eliminar'])){
                micuentaController::eliminarUsuario($id);
            }
        }

        public static function añadirVista(){
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/añadirproducto.php';
            }

        }

        public static function añadirUsuarioVista(){
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/añadirusuario.php';
            }
        }

        public static function añadirProducto(){
            $nombre = $_POST['nombreproducto'];
            $precio = $_POST['precioproducto'];
            $categoria = $_POST['categoria'];
            productoDAO::añadirProducto($nombre, $precio, $categoria);
            header("Location:".URL."?controller=micuenta");
        }

        public static function añadirUsuario(){
            $nombre = $_POST['nombreusuario'];
            $apellidos = $_POST['apellidousuario'];
            $contraseña = $_POST['contraseña'];
            $email = $_POST['email'];
            $rol = $_POST['rol'];

            usuarioDAO::añadirUsuario($nombre, $apellidos, $contraseña, $email, $rol);
            header("Location:".URL."?controller=micuenta");
        }

        public static function modificarProducto(){
            $id = $_POST['idescondido'];
            $nombre = $_POST['nombreproducto'];
            $precio = $_POST['precioproducto'];
            $categoria = $_POST['categoria'];
            productoDAO::modificarProducto($nombre, $precio, $categoria, $id);
            header("Location:".URL."?controller=micuenta");
        }

        public static function modificarUsuario(){
            $nombre = $_POST['nombreusuario'];
            $apellidos = $_POST['apellidousuario'];
            $contraseña = $_POST['contraseña'];
            $email = $_POST['email'];
            $rol = $_POST['rol'];
            $id = $_POST['idescondido'];

            usuarioDAO::modificarUsuarioAdmin($nombre, $apellidos, $contraseña, $email, $rol, $id);
            header("Location:".URL."?controller=micuenta");
        }

        public static function eliminar($id){
            productoDAO::eliminarProducto($id);
            header("Location:".URL."?controller=micuenta");
        }

        public static function eliminarUsuario($id){
            usuarioDAO::eliminarUsuario($id);
            header("Location:".URL."?controller=micuenta");
        }


    }






?>