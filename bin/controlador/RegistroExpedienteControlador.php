<?php
use modelo\RegistroExpedienteModelo as Expedientes;
use config\componentes\configSistema as configSistema;
session_start();
if (!isset($_SESSION['usuario'])) {
    echo '<script>window.location.href="?pagina=Login";</script>';
}
$config = new configSistema;
$Expediente = new Expedientes();
if (!is_file($config->_Dir_Model_().$pagina.$config->_MODEL_())) {
    echo "Falta definir la clase " . $pagina;
    exit;
}
if (is_file("vista/" . $pagina . "Vista.php")) {

    if (isset($_POST['accion'])) {
        $accion = $_POST['accion'];
        $modulo = 'Expedientes:';
    if ($accion == 'registrar') {
        $response = $Expediente->registrarE($_POST['supervisor'],$_POST['nro_providencia'],$_POST['sujeto_pasivo'],$_POST['rif'],$_POST['domicilio_fiscal'],$_POST['fiscal_A']);
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
        $response = $Expediente->eliminar($_POST['id_expediente'],$_POST['id_usuario']);
        if ($response['resultado'] == 1) {
            echo json_encode([
                'estatus' => '1',
                'icon' => 'success',
                'title' => $modulo,
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
        $datos = $Expediente->cargar($_POST['id_expediente'],$_POST['id_usuario']);
        foreach ($datos as $valor) {
            echo json_encode([
                'id_expedient_user' => $valor['id_expedient_user'],
                'id_expediente' => $valor['id_expediente'],
                'nro_providencia' => $valor['NroProvi'],
                'sujeto_pasivo' => $valor['sujetoP'],
                'rif' => $valor['RifSP'],
                'domicilio_fiscal' => $valor['DomicilioFiscal'],
                'id_usuario' => $valor['id_usuario'],
            ]);
        }
        return 0;
    }else if ($accion == 'modificar') {
            $response = $Expediente->modificar($_POST['id_expedient_user'],$_POST['id_expediente'],$_POST['supervisor'],$_POST['nro_providencia'],$_POST['sujeto_pasivo'],$_POST['rif'],$_POST['domicilio_fiscal'],$_POST['fiscal_A']);
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
        }else if ($accion == 'cambiar_estado') {
            $response = $Expediente->cambiar_estado($_POST['estado'],$_POST['id_expediente']);
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
        else if ($accion == 'buscar_status_expediente') {
            $datos = $Expediente->buscar_status_expediente($_POST['id_expediente']);
            foreach ($datos as $valor) {
                echo json_encode([
                    'id_estado_expedientes' => $valor['id_estado_expedientes'],
                ]);
            }
            return 0;
            exit;
        }
    }

    $r1 = $Expediente->listar();
    $r2 = $Expediente->listar_fiscal();
    require_once "vista/" . $pagina . "Vista.php";
} else {
    echo "pagina en construccion";
}