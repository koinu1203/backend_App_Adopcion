<?php

require_once('/app/logic/gestorUsuario.php');

try {

    if (isset($_POST['codigo']) && isset($_POST['dni']) && isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['correo']) && isset($_POST['telefono']) &&  isset($_POST['foto'])&& isset($_POST['idusuario'])) {
        $codigo = $_POST['codigo'];
        $dni = $_POST['dni'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $foto = $_POST['foto'];
        $idusuario = $_POST['idusario'];
        editarUsuario($codigo,$dni,$nombres,$apellidos,$correo,$telefono,$foto,$idusuario);
    }else {
        echo json_encode('datos incorrectos');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}