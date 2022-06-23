<?php
require_once('/xampp/htdocs/App_Adopcion/database/dalEmpresa.php');

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