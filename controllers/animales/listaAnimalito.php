<?php

require_once('/app/logic/gestorAnimalitos.php');

try {
    if (isset($_GET['codigoEmpresa'])) {
        $codigoEmpresa = $_GET['codigoEmpresa'];

        echo json_encode(listaAnimalito($codigoEmpresa), JSON_PRETTY_PRINT);
    } else {
        echo json_encode('no se encontro empresa');
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
