<?php
require_once('/app/database/dalUsuario.php');

    function eliminarUsuario($idusuario){
        return borrarUsuario($idusuario);
    }

    function guardarUsuario($codigo,$dni,$nombres,$apellidos,$correo,$telefono,$codigoEmpresa,$foto,$contrasena){
        return insertarUsuario($codigo,$dni,$nombres,$apellidos,$correo,$telefono,$codigoEmpresa,$foto,$contrasena);
    }

    function editarUsuario($codigo,$dni,$nombres,$apellidos,$correo,$telefono,$foto,$idusuario){
        return actualizarusuario($codigo,$dni,$nombres,$apellidos,$correo,$telefono,$foto,$idusuario);
    }

    function buscarUsuarioID($idusuario){
        return obtenerUsuarioID($idusuario);
    }

    function login($correo,$contrasena){
        return iniciarSeccion($correo,$contrasena);
    }

?>