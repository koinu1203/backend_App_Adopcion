<?php

require_once('../../logic/gestorUsuario.php');

try {

    if (isset($_GET['idusuario']) ) {
        $idusuario = $_GET['idusuario'];

        echo json_encode(buscarUsuarioID($idusuario), JSON_PRETTY_PRINT);
    }else {
        echo json_encode('no se encontro usuario');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
