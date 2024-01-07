<?php

    include_once 'modelo/pedidoDAO.php';
    include_once 'modelo/productoDAO.php';
    include_once 'modelo/usuarioDAO.php';
    include_once 'config/functions.php';

    //Controlador de la vista de mi-cuenta
    class micuentaController {
        public static function index() {

            //Comprueba la existencia del controller que se ha llamado y lo incluye si lo encuentra.
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/micuenta-panel.php';
            }
        }

        public static function infocuenta() {
            //Comprueba la existencia del controller que se ha llamado y lo incluye si lo encuentra.
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/micuenta-info.php';
            }
        }

        public static function gestionProductos() {

            //Comprueba la existencia del controller que se ha llamado y lo incluye si lo encuentra.
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                $productos = productoDAO::getAllProducts();
                include_once 'vista/gestionProductos.php';
            }
        }

        public static function gestionUsuarios() {

            //Comprueba la existencia del controller que se ha llamado y lo incluye si lo encuentra.
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                $usuarios = usuarioDAO::getAllUsuarios();
                include_once 'vista/gestionUsuarios.php';
            }
        }

        public static function adminProducto(){


            //Comprueba si se quiere eliminar o modificar el producto y asi enviar los datos a otro controlador o vista
            $id = $_POST['idescondido'];

            if(isset($_POST['modificar'])){
                $producto = productoDAO::getProductById($id);
                include_once 'vista/modificarproducto.php';
            } else if(isset($_POST['eliminar'])){
                micuentaController::eliminar($id);
            }
        }

        public static function adminUsuario(){
            //Comprueba si se quiere eliminar o modificar el usuario y asi enviar los datos a otro controlador o vista
            $id = $_POST['idescondido'];

            if(isset($_POST['modificar'])){
                $usuario = usuarioDAO::getUsuarioById($id);
                include_once 'vista/modificarusuario.php';
            } else if(isset($_POST['eliminar'])){
                micuentaController::eliminarUsuario($id);
            }
        }

        public static function añadirVista(){
            //Comprueba la existencia del controller que se ha llamado y lo incluye si lo encuentra.
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/añadirproducto.php';
            }

        }

        public static function añadirUsuarioVista(){
            //Comprueba la existencia del controller que se ha llamado y lo incluye si lo encuentra.
            if(!isset($_GET['controller'])) {
                include_once 'vista/home.php';
            } else {
                include_once 'vista/añadirusuario.php';
            }
        }

        public static function añadirProducto(){
            //Recoge los datos del form de la vista y los envia a ProductoDAO
            $nombre = $_POST['nombreproducto'];
            $precio = $_POST['precioproducto'];
            $categoria = $_POST['categoria'];
            productoDAO::añadirProducto($nombre, $precio, $categoria);
            header("Location:".URL."?controller=micuenta");
        }

        public static function añadirUsuario(){
            //Recoge los datos del form de la vista y los envia a usuarioDAO
            $nombre = $_POST['nombreusuario'];
            $apellidos = $_POST['apellidousuario'];
            $contraseña = $_POST['contraseña'];
            $email = $_POST['email'];
            $rol = $_POST['rol'];

            usuarioDAO::añadirUsuario($nombre, $apellidos, $contraseña, $email, $rol);
            header("Location:".URL."?controller=micuenta");
        }

        public static function modificarProducto(){

            //Recoge los datos del form de la vista y los envia a ProductoDAO
            $id = $_POST['idescondido'];
            $nombre = $_POST['nombreproducto'];
            $precio = $_POST['precioproducto'];
            $categoria = $_POST['categoria'];
            productoDAO::modificarProducto($nombre, $precio, $categoria, $id);
            header("Location:".URL."?controller=micuenta");
        }

        public static function modificarUsuario(){

            //Recoge los datos del form de la vista y los envia a usuarioDAO
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

            //Recoge la id del producto que se desea eliminar y lo manda a productoDAO
            productoDAO::eliminarProducto($id);
            header("Location:".URL."?controller=micuenta");
        }

        public static function eliminarUsuario($id){
            //Recoge la id del producto que se desea eliminar y lo manda a productoDAO
            usuarioDAO::eliminarUsuario($id);
            header("Location:".URL."?controller=micuenta");
        }


    }






?>