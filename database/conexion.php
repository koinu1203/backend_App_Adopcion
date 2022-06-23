<?php

    function conexion(){
        $mysqli = new mysqli("sql310.epizy.com", "epiz_32002043", "1QMm1jQ6hpcYSQn", "epiz_32002043_adopciondb");

        if($mysqli->connect_error){
            die('Se produjo un error de conexión: (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
        }

        $mysqli->set_charset('utf8');
        return $mysqli;
    }
?>