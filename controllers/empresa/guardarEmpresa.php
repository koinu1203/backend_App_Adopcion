<?php

require_once('/app/logic/gestorEmpresa.php');

try {

    if (isset($_POST['codigo']) && isset($_POST['nombre']) && isset($_POST['logo'])) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $logo = $_POST['logo'];

        guardarEmpresa($codigo,$nombre,$logo);
    }else {
        echo json_encode('no se guardo empresa');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
