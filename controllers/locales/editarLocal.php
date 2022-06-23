<?php

require_once('/xampp/htdocs/App_Adopcion/logic/gestorLocales.php');

try {

    if (isset($_GET['idlocal']) && isset($_GET['codigo']) && isset($_GET['direccion']) && isset($_GET['latitud']) && isset($_GET['longitud'])) {
        $idlocal = $_GET['idlocal'];
        $codigo = $_GET['codigo'];
        $direccion = $_GET['direccion'];
        $latitud = $_GET['latitud'];
        $longitud = $_GET['longitud'];
        editarLocal($idlocal,$codigo,$direccion,$latitud,$longitud);
    }else {
        echo json_encode('datos incorrectos');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
