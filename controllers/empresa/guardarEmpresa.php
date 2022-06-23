<?php

require_once('/xampp/htdocs/App_Adopcion/logic/gestorEmpresa.php');

try {

    if (isset($_GET['codigo']) && isset($_GET['nombre']) && isset($_GET['logo'])) {
        $codigo = $_GET['codigo'];
        $nombre = $_GET['nombre'];
        $logo = $_GET['logo'];

        guardarEmpresa($codigo,$nombre,$logo);
    }else {
        echo json_encode('no se guardo empresa');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
