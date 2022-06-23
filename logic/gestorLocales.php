<?php
require_once('/app/database/dalLocales.php');

    function listaLocal($codigoEmpresa){
        return listarLocal($codigoEmpresa);
    }

    function eliminarLocal($idlocal){
        return borrarLocal($idlocal);
    }

    function guardarLocal($codigo,$direccion,$codigpEmpresa,$latitud,$longitud){
        return insertarLocal($codigo,$direccion,$codigpEmpresa,$latitud,$longitud);
    }

    function editarLocal($idlocal,$codigo,$direccion,$latitud,$longitud){
        return actualizarLocal($idlocal,$codigo,$direccion,$latitud,$longitud);
    }

    function buscarLocalID($idlocal){
        return obtenerLocalID($idlocal);
    }



?>