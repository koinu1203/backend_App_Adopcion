<?php

require_once('/xampp/htdocs/App_Adopcion/logic/gestorLocales.php');

try {

    if (isset($_GET['codigo']) && isset($_GET['direccion']) && isset($_GET['codigoempresa']) && isset($_GET['latitud']) && isset($_GET['longitud']) ) {
        $codigo = $_GET['codigo'];
        $direccion = $_GET['direccion'];
        $nombres = $_GET['codigoEmpresa'];
        $apellidos = $_GET['latitud'];
        $correo = $_GET['longitud'];
        guardarLocal($codigo,$direccion,$codigoEmpresa,$latitud,$longitud);
    }else {
        echo json_encode('datos incorrectos');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
