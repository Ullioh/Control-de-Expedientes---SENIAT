<?php
namespace modelo;
use config\connect\connectDB as connectDB;
class RegistroExpedienteSumarioModelo extends connectDB
{
    public function registrarE($supervisor,$nro_providencia,$sujeto_pasivo,$rif,$domicilio_fiscal,$fiscal_A,$id_area)
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
                id_area_expediente,
                id_estado_expedientes
                )
            VALUES(
                '$nro_providencia',
                '$sujeto_pasivo',
                '$rif',
                '$domicilio_fiscal',
                '$id_area',
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

    public function eliminar($id_expediente,$id_usuario)
    {
    try {
        $this->conex->query("DELETE FROM userxexpediente WHERE id_user = '$id_usuario' AND id_expediente = '$id_expediente'");
        $this->conex->query("DELETE FROM expedientes WHERE id = '$id_expediente'");
        $respuesta['resultado'] = 1;
        $respuesta['mensaje'] = "Eliminacion exitosa";
        return $respuesta;
    } catch (Exception $e) {
        $respuesta['resultado'] = 0;
        $respuesta['mensaje'] = $e->getMessage();
    }
    }

    public function cargar($id_expediente, $id_usuario)
    {
        $resultado = $this->conex->prepare("SELECT *, expedientes.id as id_expediente, user.id as id_usuario, userxexpediente.id AS id_expedient_user FROM expedientes,userxexpediente,user WHERE user.id = userxexpediente.id_user AND userxexpediente.id_expediente = expedientes.id AND expedientes.id ='$id_expediente' and user.id ='$id_usuario'");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $respuestaArreglo;
    }

    public function buscar_status_expediente($id_expediente)
    {
        $resultado = $this->conex->prepare("SELECT * FROM expedientes WHERE  id ='$id_expediente'");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $respuestaArreglo;
    }

    public function modificar($id_expedient_user ,$id_expediente,$supervisor,$nro_providencia,$sujeto_pasivo,$rif,$domicilio_fiscal,$fiscal_A)
    {
        $validar_modificar = $this->validar_modificar($id_expediente, $nro_providencia);
        if ($validar_modificar) {
            $respuesta['resultado'] = 3;
            $respuesta['mensaje'] = "El expediente ya se encuetra registrada.";
        }else {
            try {
                $this->conex->query("UPDATE expedientes SET NroProvi = '$nro_providencia', sujetoP = '$sujeto_pasivo', RifSP = '$rif', DomicilioFiscal = '$domicilio_fiscal' WHERE id = '$id_expediente'");
                $this->conex->query("UPDATE userxexpediente SET id_user = '$fiscal_A', id_expediente = '$id_expediente' WHERE id = '$id_expedient_user'");
                $respuesta["resultado"]=1;
                $respuesta["mensaje"]="Modificación exitosa.";
            } catch (Exception $e) {
                $respuesta['resultado'] = 0;
                $respuesta['mensaje'] = $e->getMessage();
            }
        }
        return $respuesta;
    }

    public function cambiar_estado($estado ,$id_expediente)
    {
        try {
            $this->conex->query("UPDATE expedientes SET id_estado_expedientes = '$estado' WHERE id = '$id_expediente'");
            $respuesta["resultado"]=1;
            $respuesta["mensaje"]="Modificación exitosa.";
        } catch (Exception $e) {
            $respuesta['resultado'] = 0;
            $respuesta['mensaje'] = $e->getMessage();
        }
        return $respuesta;
    }


    public function validar_modificar($id, $nro_providencia)
    {
        try {
            $resultado = $this->conex->prepare("SELECT * FROM expedientes WHERE NroProvi='$nro_providencia' AND id<>'$id'");
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
        $resultado = $this->conex->prepare("SELECT *,expedientes.id as id_expedientes, user.id as id_usuario FROM expedientes,estado_expediente,userxexpediente,user,area_expediente, division_expediente WHERE expedientes.id_estado_expedientes = estado_expediente.id and expedientes.id = userxexpediente.id_expediente AND userxexpediente.id_user = user.id and expedientes.id_area_expediente = area_expediente.id and division_expediente.id = area_expediente.id_division_expediente and division_expediente.nombre_division = 'División de Sumario Administrativo'");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $respuestaArreglo;
    }
    
    public function listar_division()
    {
        $resultado = $this->conex->prepare("SELECT * FROM division_expediente");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $respuestaArreglo;
    }

    public function regis_buscarArea($id_division)
    {
        $resultado = $this->conex->prepare("SELECT * FROM area_expediente WHERE id_division_expediente = '$id_division'");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    
        // Generar las opciones del select
        $optionsHTML = '';
        foreach ($respuestaArreglo as $fila) {
            $optionsHTML .= '<option value="' . $fila['id'] . '">' . $fila['nombre_area'] . '</option>';
        }
    
        // Incorporar el select en el HTML
        $selectHTML = '<div class="input-group mb-1">';
        $selectHTML .= '<label class="input-group-text" for="registro_id_area">Área</label>';
        $selectHTML .= '<select class="form-select" id="registro_id_area">';
        $selectHTML .= '<option value="0" selected>Seleccionar área</option>';
        $selectHTML .= $optionsHTML; // Agregar las opciones generadas dinámicamente
        $selectHTML .= '</select> <spam id="sregistro_id_area"></spam>';
        $selectHTML .= '</div>';    
        // Retornar el select HTML
        return $selectHTML;
    }
    
    public function buscarArea($id_division)
    {
        $resultado = $this->conex->prepare("SELECT * FROM area_expediente WHERE id_division_expediente = '$id_division'");
        $respuestaArreglo = [];
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    
        // Generar las opciones del select
        $optionsHTML = '';
        foreach ($respuestaArreglo as $fila) {
            $optionsHTML .= '<option value="' . $fila['id'] . '">' . $fila['nombre_area'] . '</option>';
        }
    
        // Incorporar el select en el HTML
        $selectHTML = '<div class="input-group mb-1">';
        $selectHTML .= '<label class="input-group-text" for="id_area">Área</label>';
        $selectHTML .= '<select class="form-select" id="id_area">';
        $selectHTML .= '<option value="0" selected>Seleccionar área</option>';
        $selectHTML .= $optionsHTML; // Agregar las opciones generadas dinámicamente
        $selectHTML .= '</select>';
        $selectHTML .= '</div>';
        $selectHTML .= '<div class="d-flex justify-content-center" id="enviar_expediente"><button type="button" onclick="enviar_expediente()" class="btn btn-outline-primary">Despachar expediente</button></div>';
    
        // Retornar el select HTML
        return $selectHTML;
    }

    public function actualizar_area_expediente($id_area,$id_expediente)
    {
        try {
            $this->conex->query("UPDATE expedientes SET id_area_expediente = '$id_area' WHERE id = '$id_expediente'");
            $respuesta["resultado"]=1;
            $respuesta["mensaje"]="Modificación exitosa.";
        } catch (Exception $e) {
            $respuesta['resultado'] = 0;
            $respuesta['mensaje'] = $e->getMessage();
        }
        return $respuesta;
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