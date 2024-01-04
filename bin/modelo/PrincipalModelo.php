<?php
namespace modelo;
use config\connect\connectDB as connectDB;
class PrincipalModelo extends connectDB
{
    public function totalexpedientes()
    {
        $resultado = $this->conex->prepare("SELECT COUNT(NroProvi) as cantidadex FROM expedientes");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $respuestaArreglo;
    }
    public function expedientesrevision()
    {
        $resultado = $this->conex->prepare("  SELECT COUNT(NroProvi) as cantidadex FROM expedientes,estado_expediente WHERE expedientes.id_estado_expedientes = estado_expediente.id AND expedientes.id_estado_expedientes = '1'");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $respuestaArreglo;
    }

    public function expedientesproceso()
    {
        $resultado = $this->conex->prepare("SELECT COUNT(NroProvi) as cantidadex FROM expedientes,estado_expediente WHERE expedientes.id_estado_expedientes = estado_expediente.id AND expedientes.id_estado_expedientes = '2'");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $respuestaArreglo;
    }

    public function expedientesarchivados()
    {
        $resultado = $this->conex->prepare("SELECT COUNT(NroProvi) as cantidadex FROM expedientes,area_expediente WHERE expedientes.id_area_expediente = area_expediente.id AND area_expediente.nombre_area = 'Área de Archivo General'");
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