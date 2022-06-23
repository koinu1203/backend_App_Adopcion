<?php

require_once('/xampp/htdocs/App_Adopcion/logic/gestoLocales.php');

try {
    if (isset($_GET['codigoEmpresa'])) {
        $codigoEmpresa = $_GET['codigoEmpresa'];

        echo json_encode(listaLocal($codigoEmpresa), JSON_PRETTY_PRINT);
    } else {
        echo json_encode('no se encontro empresa');
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
