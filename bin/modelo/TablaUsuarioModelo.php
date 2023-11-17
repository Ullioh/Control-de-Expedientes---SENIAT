<?php
namespace modelo;
use config\connect\connectDB as connectDB;
class TablaUsuarioModelo extends connectDB
{
    public function registrarU()
    {
        $validar_registro = $this->validar_registro($this->user);
        if ($validar_registro) {
            return false;
        } else {
            try {
                $this->conex->query("INSERT INTO usuarios(
        					nombre_apellido,
        					email,
        					cedula,
        					clave
        					)
        				VALUES(
        					'$this->nombreapellido',
        					'$this->email',
        					'$this->user',
        					'$this->password'
        				)");
                return true;
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
    }

    public function listar()
    {
        $resultado = $this->conex->prepare("SELECT * FROM user,area,division WHERE user.id_area = area.id AND area.id_division = division.id");
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