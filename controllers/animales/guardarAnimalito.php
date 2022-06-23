<?php

require_once('/xampp/htdocs/App_Adopcion/logic/gestorAnimalitos.php');

try {

    if (isset($_GET['codigo']) && isset($_GET['nombre']) && isset($_GET['raza']) && isset($_GET['foto']) && isset($_GET['color'])&& isset($_GET['codigoEmpresa']) ) {
        $codigo = $_GET['codigo'];
        $nombre = $_GET['nombre'];
        $raza = $_GET['raza'];
        $foto = $_GET['foto'];
        $codigoEmpresa = $_GET['codigoEmpresa'];
        guardarAnimalito($codigo,$nombre,$raza,$foto,$color,$codigoEmpresa);
    }else {
        echo json_encode('datos incorrectos');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
