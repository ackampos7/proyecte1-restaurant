<?php

include_once '../config/functions.php';
include_once '../config/database.php';

class usuarioDAO {

    public static function createNewUser($nombre, $apellidos, $contraseña, $email) {

        $con = database::connect();

        //$result = $con->query("SELECT count(EMAIL) FROM USUARIOS WHERE EMAIL = '$email';");
        
        //if($result->num_rows == 0) {
        $result = $con->query("INSERT INTO USUARIOS (nombre, apellidos, contraseña, email, rol) VALUES ('$nombre', '$apellidos', '$contraseña', '$email', 'Cliente');");
        //} 
    }

    public static function iniciarSesion($email, $contraseña) {
        $con = database::connect();

        $result = $con->query("SELECT count(EMAIL) FROM USUARIOS WHERE EMAIL = '$email';");
        $count = $con-> num_rows($result);

        if ($count < 1) {
            $exists = false;
            
        } else {
            $exists = true;
        }
    }





}







?>