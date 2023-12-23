<?php
use modelo\LoginModelo as Login;
use config\componentes\configSistema as configSistema;
session_start();

$config = new configSistema;
$login = new Login;
if (!is_file($config->_Dir_Model_().$pagina.$config->_MODEL_())) {
    echo "Falta definir la clase " . $pagina;
    exit;
}

if (is_file("vista/" . $pagina . "Vista.php")) {


    if (isset($_POST['cedula'])&& isset($_POST['clave'])) {
        $accion = $_POST['accion'];
        if($accion=="ingresar"){
            $usuario = $_POST['cedula'];
            $clave = $_POST['clave'];
            $login->set_user($usuario);
            $login->set_password($clave);
            $responseU = $login->verificarU();
            if($responseU == true){
                $infoU = $login->datos_UserU();
                foreach ($infoU as $datos) {
                    $_SESSION['usuario'] = array('id' => $datos['id'],'cedula' => $datos['cedula_user'], 'nombre_apellido' => $datos['nombre_user'], 'id_area' => $datos['id_area'], 'nombre_rol' => $datos['nombre_rol'], 'password' => $datos['password']);
                }
                echo json_encode([
                    'estatus' => '1',
                    'icon' => 'success',
                    'title' => 'Login',
                    'message' => 'Inicio exitoso'
                ]);
                return 0;
            }
            else{
                echo json_encode([
                    'estatus' => '3',
                    'icon' => 'info',
                    'title' => 'Login',
                    'message' => 'Verifique sus datos'
                ]);
                return 0;
            }
        }else if($accion=="registrar"){
            $nombreapellido = $_POST['nombreapellido'];
            $email = $_POST['email'];
            $cedula = $_POST['cedula'];
            $clave1 = $_POST['clave'];
            $login->set_nombreapellido($nombreapellido);
            $login->set_email($email);
            $login->set_user($cedula);
            $login->set_password($clave1);
            $response = $login->registrarU();
            if ($response == true) {
                echo json_encode([
                    'estatus' => '2',
                    'icon' => 'success',
                    'title' => 'Usuario',
                    'message' => 'Registro Exitoso.'
                ]);
                return 0;
            }else {
                echo json_encode([
                    'estatus' => '3',
                    'icon' => 'info',
                    'title' => 'Usuario',
                    'message' => 'El Usuario ya se encuentra registrado.'
                ]);
                return 0;
            }
        }
    }else {
        session_destroy();
    }
   
    require_once "vista/" . $pagina . "Vista.php";
} else {
    echo "pagina en construccion";
}