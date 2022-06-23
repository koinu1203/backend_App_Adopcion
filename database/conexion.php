<?php

    function conexion(){
        $mysqli = new mysqli("us-cdbr-east-05.cleardb.net", "bacab510497bff", "d4a44afc", "heroku_71847ff38a84456");

        if($mysqli->connect_error){
            die('Se produjo un error de conexión: (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
        }

        $mysqli->set_charset('utf8');
        return $mysqli;
    }
?>