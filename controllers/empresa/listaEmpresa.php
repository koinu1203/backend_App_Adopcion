<?php

require_once('/xampp/htdocs/App_Adopcion/logic/gestorEmpresa.php');

try {

    echo json_encode(listaEmpresa(), JSON_PRETTY_PRINT);

} 
catch (Exception $e) {
    echo $e->getMessage();

}
