<?php

require_once('/app/logic/gestorEmpresa.php');

try {

    if (isset($_GET['codigo']) ) {
        $codigo = $_GET['codigo'];

        echo json_encode(obtenerEmpresaCODIGO($codigo), JSON_PRETTY_PRINT);
    }else {
        echo json_encode('no se encontro usuario');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
