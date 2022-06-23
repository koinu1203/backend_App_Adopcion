<?php
 require_once('conexion.php');
 require_once('../models/usuario.php');

    function borrarAnimalito($idanimalito){
        $mysqli = conexion();
        $consultaSQL = "DELETE FROM animalito WHERE idanimalito = ?";
        $stmt = $mysqli->prepare($consultaSQL);
        $stmt->bind_param(
            "i",
            $idanimalito
        );
        $stmt->execute();

        $stmt->close();
        $mysqli->close();  
    }

    function insertarAnimalito($codigo,$nombre,$raza,$foto,$color,$codigoEmpresa){
        $mysqli = conexion();

        $consultaSQL = "INSERT INTO animalito(codigo,nombre,raza,foto,color,codigoEmpresa,estado) VALUES(?,?,?,?,?,?,1)";
        $stmt = $mysqli->prepare($consultaSQL);

        $stmt->bind_param(
            "ssssss", $codigo,$nombre,$raza,$foto,$color,$codigoEmpresa
        );

        $stmt->execute();
        $stmt->close();
        $mysqli->close();
    }

    function actualizarAnimalito($idanimalito,$codigo,$nombre,$raza,$foto,$color){
        $mysqli = conexion();

        $consultaSQL = "UPDATE animalito SET codigo= ?,nombre= ?,raza= ?,foto= ?,color= ? WHERE idanimalito = ?";
        $stmt = $mysqli->prepare($consultaSQL);

        $stmt->bind_param(
            "sssssi",$codigo,$nombre,$raza,$foto,$color,$idanimalito
        );

        $stmt->execute();
        $stmt->close();
        $mysqli->close();
    }

    function obtenerAnimalitoID($idanimalito){
        $mysqli = conexion();
        $consultaSQL = 'SELECT * FROM animalito WHERE idanimalito = ?';
        
        $stmt = $mysqli->prepare($consultaSQL);
    
        $stmt->bind_param(
            "i",$idanimalito
        );

        $stmt->execute();
        $lista = array();
        $result = $stmt->get_result();
    
        while ($row = $result->fetch_assoc()) {
    
            $obj = new animalito();
            $obj->idanimalito = $row['idanimalito'];
            $obj->codigo = $row['codigo'];
            $obj->nombre = $row['nombre'];
            $obj->raza = $row['raza'];
            $obj->color = $row['color'];
            $obj->foto = $row['foto'];
            $obj->estado = $row['estado'];
            $obj->codigoEmpresa = $row['codigoEmpresa'];

            array_push($lista, $obj);
        }

        $stmt->close();
        $mysqli->close();
    
        return $lista;
    }

    function listarAnimalito($codigoEmpresa){
        $mysqli = conexion();
        $consultaSQL = 'SELECT * FROM  animalito';
        
        $stmt = $mysqli->prepare($consultaSQL);
        $stmt->bind_param(
            "s",$codigoEmpresa
        );
        $stmt->execute();
        $lista = array();
        $result = $stmt->get_result();
    
        while ($row = $result->fetch_assoc()) {
    
            $obj = new animalito();
            $obj->idanimalito = $row['idanimalito'];
            $obj->codigo = $row['codigo'];
            $obj->nombre = $row['nombre'];
            $obj->raza = $row['raza'];
            $obj->color = $row['color'];
            $obj->foto = $row['foto'];
            $obj->estado = $row['estado'];
            $obj->codigoEmpresa = $row['codigoEmpresa'];

            array_push($lista, $obj);
        }

        $stmt->close();
        $mysqli->close();
    
        return $lista;
    }

?>