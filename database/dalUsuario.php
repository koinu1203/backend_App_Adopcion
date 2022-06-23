<?php
 require_once('conexion.php');
 require_once('../models/usuario.php');

    function iniciarSeccion($correo,$contrasena){
        $mysqli = conexion();
        $consultaSQL = 'SELECT * FROM usuario WHERE correo = ? and contrasena = ?';
        
        $stmt = $mysqli->prepare($consultaSQL);
        $encriptar = md5($contrasena);

        $stmt->bind_param(
            "ss",$correo,$encriptar
        );

        $stmt->execute();
        $lista = array();
        $result = $stmt->get_result();
    
        while ($row = $result->fetch_assoc()) {
    
            $obj = new usuario();
            $obj->idusuario = $row['idusuario'];
            $obj->codigo = $row['codigo'];
            $obj->dni = $row['dni'];
            $obj->nombres = $row['nombres'];
            $obj->apellidos = $row['apellidos'];
            $obj->correo = $row['correo'];
            $obj->telefono = $row['telefono'];
            $obj->estado = $row['estado'];
            $obj->fecha = $row['fecha'];
            $obj->codigoEmpresa = $row['codigoEmpresa'];
            $obj->foto = $row['foto'];
            $obj->contrasena = $row['contrasena'];

            array_push($lista, $obj);
        }

        $stmt->close();
        $mysqli->close();
    
        return $lista;
    }

    function borrarUsuario($idusuario){
        $mysqli = conexion();
        $consultaSQL = "DELETE FROM usuario WHERE idusuario = ?";
        $stmt = $mysqli->prepare($consultaSQL);
        $stmt->bind_param(
            "i",
            $idusuario
        );
        $stmt->execute();

        $stmt->close();
        $mysqli->close();  
    }

    function insertarUsuario($codigo,$dni,$nombres,$apellidos,$correo,$telefono,$codigoEmpresa,$foto,$contrasena){
        $mysqli = conexion();

        $consultaSQL = "INSERT INTO usuario(codigo,dni,nombres,apellidos,correo,telefono,fecha,codigoEmpresa,foto,estado,contrasena) VALUES(?,?,?,?,?,?,now(),?,?,1,?)";
        $stmt = $mysqli->prepare($consultaSQL);
        $encriptar = md5($contrasena);
        $stmt->bind_param(
            "sisssisss", $codigo,$dni,$nombres,$apellidos,$correo,$telefono,$codigoEmpresa,$foto,$encriptar
        );

        $stmt->execute();
        $stmt->close();
        $mysqli->close();
    }

    function actualizarusuario($codigo,$dni,$nombres,$apellidos,$correo,$telefono,$foto,$idusuario){
        $mysqli = conexion();

        $consultaSQL = "UPDATE usuario SET codigo= ?,dni= ?,nombres= ?,apellidos= ?,correo= ?,telefono= ?,foto= ? WHERE idusuario = ?";
        $stmt = $mysqli->prepare($consultaSQL);

        $stmt->bind_param(
            "sisssisi",$codigo,$dni,$nombres,$apellidos,$correo,$telefono,$foto,$idusuario
        );

        $stmt->execute();
        $stmt->close();
        $mysqli->close();
    }

    function obtenerUsuarioID($idusuario){
        $mysqli = conexion();
        $consultaSQL = 'SELECT * FROM usuario WHERE idusuario = ?';
        
        $stmt = $mysqli->prepare($consultaSQL);
    
        $stmt->bind_param(
            "i",$idusuario
        );

        $stmt->execute();
        $lista = array();
        $result = $stmt->get_result();
    
        while ($row = $result->fetch_assoc()) {
    
            $obj = new usuario();
            $obj->idusuario = $row['idusuario'];
            $obj->codigo = $row['codigo'];
            $obj->dni = $row['dni'];
            $obj->nombres = $row['nombres'];
            $obj->apellidos = $row['apellidos'];
            $obj->correo = $row['correo'];
            $obj->telefono = $row['telefono'];
            $obj->estado = $row['estado'];
            $obj->fecha = $row['fecha'];
            $obj->codigoEmpresa = $row['codigoEmpresa'];
            $obj->foto = $row['foto'];
            $obj->contrasena = $row['contrasena'];

            array_push($lista, $obj);
        }

        $stmt->close();
        $mysqli->close();
    
        return $lista;
    }

?>