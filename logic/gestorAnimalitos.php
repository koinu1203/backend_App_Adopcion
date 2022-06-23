<?php
require_once('../database/dalAnimales.php');

    function listaAnimalito($codigoEmpresa){
        return listarAnimalito($codigoEmpresa);
    }

    function eliminarAnimalito($idanimalito){
        return borrarAnimalito($idanimalito);
    }

    function guardarAnimalito($codigo,$nombre,$raza,$foto,$color,$codigoEmpresa){
        return insertarAnimalito($codigo,$nombre,$raza,$foto,$color,$codigoEmpresa);
    }

    function editarAnimalito($idanimalito,$codigo,$nombre,$raza,$foto,$color){
        return actualizarAnimalito($idanimalito,$codigo,$nombre,$raza,$foto,$color);
    }

    function buscarAnimalitoID($idanimalito){
        return obtenerAnimalitoID($idanimalito);
    }

?>