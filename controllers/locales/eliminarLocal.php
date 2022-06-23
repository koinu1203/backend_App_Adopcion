<?php

require_once('../../logic/gestorLocales.php');

try {

    if (isset($_GET['idlocal']) ) {
        $idlocal = $_GET['idlocal'];

        echo json_encode(eliminarLocal($idlcoal), JSON_PRETTY_PRINT);
    }else {
        echo json_encode('no se elimino el local');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
