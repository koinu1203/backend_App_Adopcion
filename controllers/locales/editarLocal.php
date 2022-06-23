<?php

require_once('/app/logic/gestorLocales.php');

try {

    if (isset($_POST['idlocal']) && isset($_POST['codigo']) && isset($_POST['direccion']) && isset($_POST['latitud']) && isset($_POST['longitud'])) {
        $idlocal = $_POST['idlocal'];
        $codigo = $_POST['codigo'];
        $direccion = $_POST['direccion'];
        $latitud = $_POST['latitud'];
        $longitud = $_POST['longitud'];
        editarLocal($idlocal,$codigo,$direccion,$latitud,$longitud);
    }else {
        echo json_encode('datos incorrectos');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
