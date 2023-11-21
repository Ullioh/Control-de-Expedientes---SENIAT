<?php
namespace modelo;
use config\connect\connectDB as connectDB;
class TablaUsuarioModelo extends connectDB
{
    public function registrarU($cedula,$nombre_apellido,$password,$cargo,$area)
    {
        $validar_registro = $this->validar_registro($cedula);
        if ($validar_registro==false) {
            $respuesta["resultado"]=3;
            $respuesta["mensaje"]="La cedula ya se encuentra registrada.";
        } else {
            try {
            $this->conex->query("INSERT INTO user(
                cedula_user,
                nombre_user,
                id_area,
                nombre_rol,
                password
                )
            VALUES(
                '$cedula',
                '$nombre_apellido',
                '$area',
                '$cargo',
                '$password'
            )");
            $respuesta["resultado"]=1;
            $respuesta["mensaje"]="Registro Exitoso.";
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
        return $respuesta;
    }

    public function validar_registro($cedula)
    {
        try {
            $resultado = $this->conex->prepare("SELECT * FROM user WHERE cedula_user='$cedula'");
            $resultado->execute();
            $fila = $resultado->fetchAll();
            if ($fila) {
                return false;
            } else {
                return true;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function eliminar($id)
    {
    try {
        $this->conex->query("DELETE FROM user WHERE id = '$id'");
        $respuesta['resultado'] = 1;
        $respuesta['mensaje'] = "Eliminacion exitosa";
        return $respuesta;
    } catch (Exception $e) {
        $respuesta['resultado'] = 0;
        $respuesta['mensaje'] = $e->getMessage();
    }
    }

    public function cargar($id)
    {
        $resultado = $this->conex->prepare("SELECT *,user.id as id_usuario FROM user,area,division WHERE user.id_area = area.id AND area.id_division = division.id AND user.id = '$id'");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $respuestaArreglo;
    }

    public function modificar($id,$cedula,$nombre_apellido,$password,$cargo,$area)
    {
        $validar_modificar = $this->validar_modificar($cedula, $id);
        if ($validar_modificar) {
            $respuesta['resultado'] = 3;
            $respuesta['mensaje'] = "La cedula ya se encuetra registrada.";
        }else {
            try {
                $this->conex->query("UPDATE user SET cedula_user = '$cedula', nombre_user = '$nombre_apellido', nombre_rol = '$cargo', id_area = '$area' WHERE id = '$id'");
                $respuesta["resultado"]=1;
                $respuesta["mensaje"]="Modificación exitosa.";
            } catch (Exception $e) {
                $respuesta['resultado'] = 0;
                $respuesta['mensaje'] = $e->getMessage();
            }
        }
        return $respuesta;
    }

    public function validar_modificar($cedula, $id)
    {
        try {
            $resultado = $this->conex->prepare("SELECT * FROM user WHERE cedula_user='$cedula' AND id<>'$id'");
            $resultado->execute();
            $fila = $resultado->fetchAll();
            if ($fila) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function listar()
    {
        $resultado = $this->conex->prepare("SELECT *,user.id as id_usuario FROM user,area,division WHERE user.id_area = area.id AND area.id_division = division.id");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $respuestaArreglo;
    }
    public function listararea()
    {
        $resultado = $this->conex->prepare("SELECT * FROM area");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $respuestaArreglo;
    }

}