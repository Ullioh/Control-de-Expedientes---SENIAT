<?php
namespace modelo;
use config\connect\connectDB as connectDB;
class ReporteExpedienteModelo extends connectDB
{

    public function buscar_expedientes($nro_expediente)
    {
        $resultado = $this->conex->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y %H:%i:%s') AS fecha_formateada FROM bitacora_expediente WHERE nro_expediente = '$nro_expediente' ORDER BY fecha ASC");
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