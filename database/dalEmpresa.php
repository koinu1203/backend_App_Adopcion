<?php
 require_once('conexion.php');
 require_once('../models/empresa.php');

    function listarEmpresa(){
        $mysqli = conexion();
        $consultaSQL = 'SELECT * FROM empresa ';
        
        $stmt = $mysqli->prepare($consultaSQL);
        $stmt->execute();
        $lista = array();
        $result = $stmt->get_result();
    
        while ($row = $result->fetch_assoc()) {
    
            $obj = new empresa();
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

    function insertarEmpresa($codigo,$nombre,$logo){
        $mysqli = conexion();

        $consultaSQL = "INSERT INTO empresa(codigo,nombre,logo,estado) VALUES(?,?,?,1)";
        $stmt = $mysqli->prepare($consultaSQL);

        $stmt->bind_param(
            "sss", $codigo,$nombre,$logo
        );

        $stmt->execute();
        $stmt->close();
        $mysqli->close();
    }

    function obtenerEmpresaCODIGO($codigo){
        $mysqli = conexion();
        $consultaSQL = 'SELECT * FROM empresa WHERE codigo = ?';
        
        $stmt = $mysqli->prepare($consultaSQL);
    
        $stmt->bind_param(
            "s",$codigo
        );

        $stmt->execute();
        $lista = array();
        $result = $stmt->get_result();
    
        while ($row = $result->fetch_assoc()) {
    
            $obj = new empresa();
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

?>