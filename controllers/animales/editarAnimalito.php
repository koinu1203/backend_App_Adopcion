<?php

require_once('../../logic/gestorAnimalitos.php');

try {

    if (isset($_GET['idanimalito']) && isset($_GET['codigo']) && isset($_GET['nombre']) && isset($_GET['raza']) && isset($_GET['foto'])&& isset($_GET['color'])) {
        $idanimalito = $_GET['idanimalito'];
        $codigo = $_GET['codigo'];
        $nombre = $_GET['nombre'];
        $raza = $_GET['raza'];
        $foto = $_GET['foto'];
        $color = $_GET['color'];

        editarAnimalito($idanimalito,$codigo,$nombre,$raza,$foto,$color);
    }else {
        echo json_encode('datos incorrectos');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
