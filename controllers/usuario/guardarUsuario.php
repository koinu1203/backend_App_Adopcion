<?php

require_once('/app/logic/gestorUsuario.php');

try {

    if (isset($_POST['codigo']) && isset($_POST['dni']) && isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['correo']) && isset($_POST['telefono']) && isset($_POST['codigoEmpresa'])&& isset($_POST['foto'])&& isset($_POST['contrasena'])) {
        $codigo = $_POST['codigo'];
        $dni = $_POST['dni'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $codigoEmpresa = $_POST['codigoEmpresa'];
        $foto = $_POST['foto'];
        $contrasena = $_POST['contrasena'];
        guardarUsuario($codigo,$dni,$nombres,$apellidos,$correo,$telefono,$codigoEmpresa,$foto,$contrasena);
    }else {
        echo json_encode('datos incorrectos');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
