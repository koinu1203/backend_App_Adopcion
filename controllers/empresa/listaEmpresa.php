<?php

require_once('/app/logic/gestorEmpresa.php');

try {

    echo json_encode(listaEmpresa(), JSON_PRETTY_PRINT);

} 
catch (Exception $e) {
    echo $e->getMessage();

}
