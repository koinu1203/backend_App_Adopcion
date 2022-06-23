<?php

require_once('/app/logic/gestorUsuario.php');

try {

    if (isset($_GET['codigo']) && isset($_GET['dni']) && isset($_GET['nombres']) && isset($_GET['apellidos']) && isset($_GET['correo']) && isset($_GET['telefono']) &&  isset($_GET['foto'])&& isset($_GET['idusuario'])) {
        $codigo = $_GET['codigo'];
        $dni = $_GET['dni'];
        $nombres = $_GET['nombres'];
        $apellidos = $_GET['apellidos'];
        $correo = $_GET['correo'];
        $telefono = $_GET['telefono'];
        $foto = $_GET['foto'];
        $idusuario = $_GET['idusario'];
        editarUsuario($codigo,$dni,$nombres,$apellidos,$correo,$telefono,$foto,$idusuario);
    }else {
        echo json_encode('datos incorrectos');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}