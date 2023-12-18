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
           
            var_dump($usuario);

            $_SESSION['usuario'] = $usuario;
        }
    }

}







?>