<?php
namespace modelo;
use config\connect\connectDB as connectDB;
class BitacoraExpedientesModelo extends connectDB
{
    public function registrar_bitacora($supervisor,$nro_expediente,$movimiento,$destino)
    {
            try {
            $this->conex->query("INSERT INTO bitacora_expediente(
                movimiento_de_expediante,
                usuario,
                nro_expediente,
                destino_expediendte
                )
            VALUES(
                '$movimiento',
                '$supervisor',
                '$nro_expediente',
                '$destino'
            )");
            $this->conex->query("UPDATE userxexpediente
            SET supervisor = '$supervisor'
            WHERE id_expediente IN (SELECT id FROM expedientes WHERE NroProvi = '$nro_expediente')");
            } catch (Exception $e) {
                return $e->getMessage();
            }
        
        return true;
    }

    public function buscar_division($area){
        $resultado = $this->conex->prepare("SELECT * FROM area_expediente, division_expediente  WHERE area_expediente.id_division_expediente = division_expediente.id AND area_expediente.id = '$area'");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $respuestaArreglo;
    }

    public function buscar_area($area){
        $resultado = $this->conex->prepare("SELECT * FROM area_expediente WHERE id = '$area'");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $respuestaArreglo;
    }

    public function listar()
    {
        $resultado = $this->conex->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y %H:%i:%s') AS fecha_formateada FROM bitacora_expediente;");
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