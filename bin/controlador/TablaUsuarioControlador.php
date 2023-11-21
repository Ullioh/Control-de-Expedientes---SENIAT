<?php
use modelo\TablaUsuarioModelo as Usuario;
use config\componentes\configSistema as configSistema;
session_start();

$config = new configSistema;
$usuario = new Usuario();
if (!isset($_SESSION['usuario'])) {
    echo '<script>window.location.href="?pagina=Login";</script>';
}

if (!is_file($config->_Dir_Model_().$pagina.$config->_MODEL_())) {
    echo "Falta definir la clase " . $pagina;
    exit;
}

if (is_file("vista/" . $pagina . "Vista.php")) {

    if (isset($_POST['accion'])) {
        $accion = $_POST['accion'];
        $modulo = 'Usuario:';
    if ($accion == 'registrar') {
        $response = $usuario->registrarU($_POST['cedula'],$_POST['nombre_apellido'],$_POST['password'],$_POST['cargo'],$_POST['area']);
        if ($response["resultado"]==1) {
            echo json_encode([
                'estatus' => '1',
                'icon' => 'success',
                'title' => $modulo,
                'message' => $response["mensaje"]
            ]);
            return 0;
        }else{
            echo json_encode([
                'estatus' => '2',
                'icon' => 'error',
                'title' => $modulo,
                'message' => $response["mensaje"]
            ]);
            return 0;
        }
        exit;
    }else if ($accion == 'eliminar') {
        $response = $usuario->eliminar($_POST['id']);
        if ($response['resultado'] == 1) {
            echo json_encode([
                'estatus' => '1',
                'icon' => 'success',
                'title' => "Usuario: ",
                'message' => $response['mensaje']
            ]);
        }else{
            echo json_encode([
                'estatus' => '2',
                'icon' => 'error',
                'title' => $modulo,
                'message' => $response["mensaje"]
            ]);
        }
        return 0;
        exit;
    } else if ($accion == 'editar') {
        $datos = $usuario->cargar($_POST['id']);
        foreach ($datos as $valor) {
            echo json_encode([
                'id' => $valor['id_usuario'],
                'cedula' => $valor['cedula_user'],
                'nombre_apellido' => $valor['nombre_user'],
                'cargo' => $valor['nombre_rol'],
                'area' => $valor['id_area'],
            ]);
        }
        return 0;
    }else if ($accion == 'modificar') {
            $response = $usuario->modificar($_POST['id'],$_POST['cedula'],$_POST['nombre_apellido'],$_POST['password'],$_POST['cargo'],$_POST['area']);
            if ($response['resultado']== 1) {
                echo json_encode([
                    'estatus' => '1',
                    'icon' => 'success',
                    'title' => $modulo,
                    'message' => $response['mensaje']
                ]);
            }else {
                echo json_encode([
                    'estatus' => '2',
                    'icon' => 'info',
                    'title' => $modulo,
                    'message' => $response['mensaje']
                ]);
            }
            return 0;
            exit;
        }
    }
    $r1 = $usuario->listar();
    $r2 = $usuario->listararea();
    require_once "vista/" . $pagina . "Vista.php";
} else {
    echo "pagina en construccion";
}