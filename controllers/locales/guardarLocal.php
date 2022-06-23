<?php

require_once('/app/logic/gestorLocales.php');

try {

    if (isset($_POST['codigo']) && isset($_POST['direccion']) && isset($_POST['codigoempresa']) && isset($_POST['latitud']) && isset($_POST['longitud']) ) {
        $codigo = $_POST['codigo'];
        $direccion = $_POST['direccion'];
        $nombres = $_POST['codigoEmpresa'];
        $apellidos = $_POST['latitud'];
        $correo = $_POST['longitud'];
        guardarLocal($codigo,$direccion,$codigoEmpresa,$latitud,$longitud);
    }else {
        echo json_encode('datos incorrectos');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
