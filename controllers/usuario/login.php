<?php

require_once('/xampp/htdocs/App_Adopcion/logic/gestorUsuario.php');

try {

    if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        echo json_encode(login($correo,$contrasena), JSON_PRETTY_PRINT);
    }else {
        echo json_encode('datos incorrectos');
    }

} 
catch (Exception $e) {
    echo $e->getMessage();

}
