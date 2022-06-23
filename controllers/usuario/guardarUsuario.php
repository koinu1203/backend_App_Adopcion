<?php

require_once('/xampp/htdocs/App_Adopcion/logic/gestorUsuario.php');

try {

    if (isset($_GET['codigo']) && isset($_GET['dni']) && isset($_GET['nombres']) && isset($_GET['apellidos']) && isset($_GET['correo']) && isset($_GET['telefono']) && isset($_GET['codigoEmpresa'])&& isset($_GET['foto'])&& isset($_GET['contrasena'])) {
        $codigo = $_GET['codigo'];
        $dni = $_GET['dni'];
        $nombres = $_GET['nombres'];
        $apellidos = $_GET['apellidos'];
        $correo = $_GET['correo'];
        $telefono = $_GET['telefono'];
        $codigoEmpresa = $_GET['codigoEmpresa'];
        $foto = $_GET['foto'];
        $contrasena = $_GET['contrasena'];
        guardarUsuario($codigo,$dni,$nombres,$apellidos,$correo,$telefono,$codigoEmpresa,$foto,$contrasena);
    }else {
        echo json_encode('datos incorrectos');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
