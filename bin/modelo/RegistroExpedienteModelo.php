<?php
namespace modelo;
use config\connect\connectDB as connectDB;
class RegistroExpedienteModelo extends connectDB
{
    public function registrarE($supervisor,$nro_providencia,$sujeto_pasivo,$rif,$domicilio_fiscal,$fiscal_A)
    {
        $validar_registro = $this->validar_registro($nro_providencia);
        if ($validar_registro==false) {
            $respuesta["resultado"]=3;
            $respuesta["mensaje"]="El expediente ya se encuentra registrada.";
        } else {
            try {
            $this->conex->query("INSERT INTO expedientes(
                NroProvi,
                sujetoP,
                RifSP,
                DomicilioFiscal,
                id_estado_expedientes
                )
            VALUES(
                '$nro_providencia',
                '$sujeto_pasivo',
                '$rif',
                '$domicilio_fiscal',
                '2'
            )");

            $resultado = $this->conex->query("SELECT * FROM expedientes WHERE NroProvi = '$nro_providencia'");
            $datos = $resultado->fetchAll();
            $id_expediente = $datos[0]['id'];

            $this->conex->query("INSERT INTO userxexpediente(
                id_user,
                id_expediente,
                supervisor
                )
            VALUES(
                '$fiscal_A',
                '$id_expediente',
                '$supervisor'
            )");

            $respuesta["resultado"]=1;
            $respuesta["mensaje"]="Registro Exitoso.";
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
        return $respuesta;
    }

    public function validar_registro($nro_providencia)
    {
        try {
            $resultado = $this->conex->prepare("SELECT * FROM expedientes WHERE NroProvi='$nro_providencia'");
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
        $resultado = $this->conex->prepare("SELECT *,expedientes.id as id_expedientes, user.id as id_usuario FROM expedientes,estado_expediente,userxexpediente,user WHERE expedientes.id_estado_expedientes = estado_expediente.id and expedientes.id = userxexpediente.id_expediente AND userxexpediente.id_user = user.id");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $respuestaArreglo;
    }
    public function listar_fiscal()
    {
        $resultado = $this->conex->prepare("SELECT * FROM user WHERE nombre_rol = 'Fiscal'");
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