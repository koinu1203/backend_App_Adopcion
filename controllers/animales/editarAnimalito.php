<?php

require_once('/app/logic/gestorAnimalitos.php');

try {

    if (isset($_POST['idanimalito']) && isset($_POST['codigo']) && isset($_POST['nombre']) && isset($_POST['raza']) && isset($_POST['foto'])&& isset($_POST['color'])) {
        $idanimalito = $_POST['idanimalito'];
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $raza = $_POST['raza'];
        $foto = $_POST['foto'];
        $color = $_POST['color'];

        editarAnimalito($idanimalito,$codigo,$nombre,$raza,$foto,$color);
    }else {
        echo json_encode('datos incorrectos');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
