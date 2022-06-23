<?php
require_once('/app/database/dalEmpresa.php');

    function listaEmpresa(){
        return listarEmpresa();
    }

    function guardarEmpresa($codigo,$nombre,$logo){
        return insertarEmpresa($codigo,$nombre,$logo);
    }

    function buscarEmpresaCODIGO($codigo){
        return obtenerEmpresaCODIGO($codigo);
    }

?>