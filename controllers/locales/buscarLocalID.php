<?php

require_once('/xampp/htdocs/App_Adopcion/logic/gestorLocales.php');

try {

    if (isset($_GET['idlocal']) ) {
        $idlocal = $_GET['idlocal'];

        echo json_encode(buscarLocalID($idlocal), JSON_PRETTY_PRINT);
    }else {
        echo json_encode('no se encontro local');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
