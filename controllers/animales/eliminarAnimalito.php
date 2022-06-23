<?php

require_once('../../logic/gestorAnimalitos.php');

try {

    if (isset($_GET['idanimalito']) ) {
        $idanimalito = $_GET['idanimalito'];

        echo json_encode(eliminarAnimalito($idanimalito), JSON_PRETTY_PRINT);
    }else {
        echo json_encode('no se elimino el animalito');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
