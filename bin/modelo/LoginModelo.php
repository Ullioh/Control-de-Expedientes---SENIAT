<?php
namespace modelo;
use config\connect\connectDB as connectDB;
class loginModelo extends connectDB
{
/*     private $nombreapellido;
    private $email; */
    private $user;
    private $password;
    public function set_user($valor)
    {
        $this->user = $valor;
    }
/*     public function set_email($valor)
    {
        $this->email = $valor;
    } */
/*     public function set_nombreapellido($valor)
    {
        $this->nombreapellido = $valor;
    } */
    public function set_password($valor)
    {
        $this->password = $valor;
    }
/*     public function get_user()
    {
        return $this->user;
    }
    public function get_password()
    {
        return $this->password;
    } */

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
    public function verificarU()
    {
        $resultado = $this->conex->prepare("SELECT * FROM user WHERE cedula_user ='$this->user' AND password ='$this->password'");
        try {
            $resultado->execute();
            $respuesta1 = $resultado->rowCount();
            if ($respuesta1 > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function datos_UserU()
    {
        $resultado = $this->conex->prepare("SELECT *,user.id as id_usuario FROM user,area,division WHERE user.id_area = area.id AND area.id_division = division.id AND cedula_user ='$this->user' AND password ='$this->password'");
        try {
            $resultado->execute();
            $respuestaArreglo = $resultado->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $respuestaArreglo;
    }


    public function validar_registro($cedula)
    {
        try {
            $resultado = $this->conex->prepare("SELECT * FROM usuarios WHERE cedula='$cedula'");
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

}