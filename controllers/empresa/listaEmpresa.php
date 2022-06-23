<?php

require_once('../../logic/gestorEmpresa.php');

try {

    echo json_encode(listaEmpresa(), JSON_PRETTY_PRINT);

} 
catch (Exception $e) {
    echo $e->getMessage();

}
