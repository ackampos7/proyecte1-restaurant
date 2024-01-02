<?php
require_once 'modelo/Usuario.php';
include_once 'modelo/Cliente.php';
include_once 'modelo/Administrador.php';
include_once 'config/functions.php';
include_once 'config/database.php';

class usuarioDAO {

    public static function createNewUser($nombre, $apellidos, $contraseña, $email) {
        $con = database::connect();
        $result = $con->query("INSERT INTO USUARIOS (nombre, apellidos, contraseña, email, rol) VALUES ('$nombre', '$apellidos', '$contraseña', '$email', 'Cliente');");
    }

    public static function iniciarSesion($email, $contraseña) {
        $con = database::connect();

        $result = $con->query("SELECT count(*) as countemail, rol FROM USUARIOS WHERE EMAIL = '$email' AND CONTRASEÑA = '$contraseña' LIMIT 1;");
        $row = mysqli_fetch_assoc($result);
        $count = $row['countemail'];
        $rol = $row['rol'];

        if($count == 1) {
            $result = $con->query("SELECT * FROM USUARIOS WHERE EMAIL = '$email' LIMIT 1;");
            if($rol == "Cliente") {
                $usuario = $result->fetch_object('Cliente');
            } else if($rol == "Administrador") {
                $usuario = $result->fetch_object('Administrador');
            }

            $_SESSION['usuario'] = $usuario;
        }
    }

    public static function getUsuario($id) {

        $con = database::connect();

        $result = $con->query("SELECT rol FROM USUARIOS WHERE usuario_id = '$id';");
        $row = mysqli_fetch_assoc($result);
        $rol = $row['rol'];

        
        $result = $con->query("SELECT * FROM USUARIOS WHERE usuario_id = '$id' LIMIT 1;");
        if($rol == "Cliente") {
            $usuario = $result->fetch_object('Cliente');
        } else if($rol == "Administrador") {
            $usuario = $result->fetch_object('Administrador');
        }

        $_SESSION['usuario'] = $usuario;

        return $usuario;

    }

    
    public static function getUsuarioById($id) {

        $con = database::connect();

        $result = $con->query("SELECT rol FROM USUARIOS WHERE usuario_id = '$id';");
        $row = mysqli_fetch_assoc($result);
        $rol = $row['rol'];

        
        $result = $con->query("SELECT * FROM USUARIOS WHERE usuario_id = '$id' LIMIT 1;");
        if($rol == "Cliente") {
            $usuario = $result->fetch_object('Cliente');
        } else if($rol == "Administrador") {
            $usuario = $result->fetch_object('Administrador');
        }

        return $usuario;

    }

    public static function modificarUsuario($nombre, $apellidos, $contraseña, $email, $id) {
        $con = database::connect();
        $result = $con->query("UPDATE USUARIOS SET nombre = '$nombre', apellidos = '$apellidos', contraseña = '$contraseña', email = '$email' WHERE usuario_id = $id");
    }


    public static function getAllUsuarios() {

        $con = dataBase::connect();

        if($result = $con->query("SELECT * FROM usuarios;")) {
            $usuarios = array();
            while ($usuario = $result->fetch_object('Usuario')) {
                $usuarios[] = $usuario;
            }
        }

        return $usuarios;
    }

    public static function añadirUsuario($nombre, $apellidos, $contraseña, $email, $rol){
        $con = database::connect();
        $result = $con->query("INSERT INTO USUARIOS (nombre, apellidos, contraseña, email, rol) VALUES ('$nombre', '$apellidos', '$contraseña', '$email', '$rol');");
    }

    public static function modificarUsuarioAdmin($nombre, $apellidos, $contraseña, $email, $rol, $id) {
        $con = database::connect();
        $result = $con->query("UPDATE USUARIOS SET nombre = '$nombre', apellidos = '$apellidos', contraseña = '$contraseña', email = '$email', rol = '$rol' WHERE usuario_id = '$id';");
    }

    
    public static function eliminarUsuario($id){
        $con = database::connect();
        $result = $con->query("DELETE FROM USUARIOS WHERE usuario_id = '$id'");
    }

}







?>