<?php

require_once('../../logic/gestorAnimalitos.php');

try {

    if (isset($_GET['idanimalito']) ) {
        $idanimalito = $_GET['idanimalito'];

        echo json_encode(buscarAnimalitoID($idanimalito), JSON_PRETTY_PRINT);
    }else {
        echo json_encode('no se encontro local');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
