<?php
require_once 'modelo/Usuario.php';
include_once 'modelo/Cliente.php';
include_once 'modelo/Administrador.php';
include_once 'config/functions.php';
include_once 'config/database.php';

class usuarioDAO {

    public static function createNewUser($nombre, $apellidos, $contraseña, $email) {
        //Inserta un nuevo usuario en la base de datos
        $con = database::connect();
        $result = $con->query("INSERT INTO USUARIOS (nombre, apellidos, contraseña, email, rol) VALUES ('$nombre', '$apellidos', '$contraseña', '$email', 'Cliente');");
    }

    public static function iniciarSesion($email, $contraseña) {
        //Comprueba el inicio de sesion con el correo y la contraseña
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
        //Devuelve el usuario con la id recibida
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
        //Devuelve el usuario con la id recibida

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
        //Modifica un usuario existente en la base de datos
        $con = database::connect();
        $result = $con->query("UPDATE USUARIOS SET nombre = '$nombre', apellidos = '$apellidos', contraseña = '$contraseña', email = '$email' WHERE usuario_id = $id");
    }


    public static function getAllUsuarios() {
        //Devuelve un array de todos los usuarios de la base de datos
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
        //Inserta a un usuario en la base de datos
        $con = database::connect();
        $result = $con->query("INSERT INTO USUARIOS (nombre, apellidos, contraseña, email, rol) VALUES ('$nombre', '$apellidos', '$contraseña', '$email', '$rol');");
    }

    public static function modificarUsuarioAdmin($nombre, $apellidos, $contraseña, $email, $rol, $id) {
        //Modifica un usuario de la base de datos
        $con = database::connect();
        $result = $con->query("UPDATE USUARIOS SET nombre = '$nombre', apellidos = '$apellidos', contraseña = '$contraseña', email = '$email', rol = '$rol' WHERE usuario_id = '$id';");
    }

    
    public static function eliminarUsuario($id){
        //Elimina un usuario de la base de datos
        $con = database::connect();
        $result = $con->query("DELETE FROM USUARIOS WHERE usuario_id = '$id'");
    }

    public static function modificarPuntos($usuarioid, $puntos)
    {
        $con = database::connect();
        $result = $con->query("UPDATE USUARIOS SET puntos = '$puntos' WHERE USUARIO_ID = '$usuarioid;");
    }

}







?>