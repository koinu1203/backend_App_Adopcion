<?php
 require_once('conexion.php');
 require_once('../models/local.php');

    function listarLocal($codigoEmpresa){
        $mysqli = conexion();
        $consultaSQL = 'SELECT * FROM `local`';
        
        $stmt = $mysqli->prepare($consultaSQL);
        $stmt->bind_param(
            "s",$codigoEmpresa
        );
        $stmt->execute();
        $lista = array();
        $result = $stmt->get_result();
    
        while ($row = $result->fetch_assoc()) {
    
            $obj = new local();
            $obj->idlocal = $row['idlocal'];
            $obj->codigo = $row['codigo'];
            $obj->direccion = $row['direccion'];
            $obj->codigpEmpresa = $row['codigpEmpresa'];
            $obj->latitud = $row['latitud'];
            $obj->longitud = $row['longitud'];

            array_push($lista, $obj);
        }

        $stmt->close();
        $mysqli->close();
    
        return $lista;
    }

    function insertarLocal($codigo,$direccion,$codigpEmpresa,$latitud,$longitud){
        $mysqli = conexion();

        $consultaSQL = "INSERT INTO  `local`(codigo,direccion,codigpEmpresa,latitud,longitud,estado) VALUES(?,?,?,?,?,1)";
        $stmt = $mysqli->prepare($consultaSQL);

        $stmt->bind_param(
            "sssdd", $codigo,$direccion,$codigpEmpresa,$latitud,$longitud
        );

        $stmt->execute();
        $stmt->close();
        $mysqli->close();
    }
    
    function actualizarLocal($idlocal,$codigo,$direccion,$latitud,$longitud){
        $mysqli = conexion();

        $consultaSQL = "UPDATE `local` SET direccion= ?,latitud= ?,longitud= ?,$codigo= ? WHERE idlocal = ?";
        $stmt = $mysqli->prepare($consultaSQL);

        $stmt->bind_param(
            "sddsi",$direccion,$latitud,$longitud,$codigo,$idlocal
        );

        $stmt->execute();
        $stmt->close();
        $mysqli->close();
    }

    function obtenerLocalID($idlocal){
        $mysqli = conexion();
        $consultaSQL = 'SELECT * FROM `local` WHERE idlocal = ?';
        
        $stmt = $mysqli->prepare($consultaSQL);
    
        $stmt->bind_param(
            "i",$idlocal
        );

        $stmt->execute();
        $lista = array();
        $result = $stmt->get_result();
    
        while ($row = $result->fetch_assoc()) {
    
            $obj = new local();
            $obj->idlocal = $row['idlocal'];
            $obj->idempresa = $row['idempresa'];
            $obj->codigo = $row['codigo'];
            $obj->nombre = $row['nombre'];
            $obj->estado = $row['estado'];
            $obj->logo = $row['logo'];

            array_push($lista, $obj);
        }

        $stmt->close();
        $mysqli->close();
    
        return $lista;
    }

    function borrarLocal($idlocal){
        $mysqli = conexion();
        $consultaSQL = "DELETE FROM `local` WHERE idlocal = ?";
        $stmt = $mysqli->prepare($consultaSQL);
        $stmt->bind_param(
            "i",
            $idlocal
        );
        $stmt->execute();

        $stmt->close();
        $mysqli->close();  
    }

?>