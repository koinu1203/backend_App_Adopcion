<?php

require_once('/app/logic/gestorUsuario.php');

try {

    if (isset($_GET['idusuario']) ) {
        $idusuario = $_GET['idusuario'];

        echo json_encode(eliminarUsuario($idusuario), JSON_PRETTY_PRINT);
    }else {
        echo json_encode('no se elimino al usuario');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
