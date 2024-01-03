<?php
use modelo\RegistroExpedienteSumarioModelo as Expedientes;
use modelo\BitacoraExpedientesModelo as bitacoraExpedientes;
use config\componentes\configSistema as configSistema;
session_start();
if (!isset($_SESSION['usuario'])) {
    echo '<script>window.location.href="?pagina=Login";</script>';
}
$config = new configSistema;
$Expediente = new Expedientes();
$bitacoraExpedientes = new bitacoraExpedientes();
if (!is_file($config->_Dir_Model_().$pagina.$config->_MODEL_())) {
    echo "Falta definir la clase " . $pagina;
    exit;
}
if (is_file("vista/" . $pagina . "Vista.php")) {

    if (isset($_POST['accion'])) {
        $accion = $_POST['accion'];
        $modulo = 'Expedientes:';
        $division_actual = 'División de Sumario Administrativo';
    if ($accion == 'registrar') {
        $response = $Expediente->registrarE($_POST['supervisor'],$_POST['nro_providencia'],$_POST['sujeto_pasivo'],$_POST['rif'],$_POST['domicilio_fiscal'],$_POST['fiscal_A'],$_POST['id_area']);
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
        }else if ($accion == 'regis_buscar_area') {
            $datos = $Expediente->regis_buscarArea($_POST['regis_id_division']);
            echo $datos;
            return 0;
            exit;
        }else if ($accion == 'buscar_area') {
            $datos = $Expediente->buscarArea($_POST['id_division']);
            echo $datos;
            return 0;
            exit;
        }else if ($accion == 'update_area_expediente') {
            $response = $Expediente->actualizar_area_expediente($_POST['id_area'],$_POST['id_expediente']);

            $division_despacho = $bitacoraExpedientes->buscar_division($_POST['id_area']);
            $area_despacho = $bitacoraExpedientes->buscar_area($_POST['id_area']);

            $movimiento_expediente = "Se despacho el expediente de la ". $division_actual . " a la ". $division_despacho[0]["nombre_division"].".";
            $destino = "División: ".$division_despacho[0]["nombre_division"]. ", ". $area_despacho[0]["nombre_area"].".";

            $bitacoraExpedientes->registrar_bitacora($_POST['supervisor'],$_POST['nro_expediente'],$movimiento_expediente,$destino);
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
    $r1 = $Expediente->listar();
    $r2 = $Expediente->listar_fiscal();
    $r3 = $Expediente->listar_division();
    require_once "vista/" . $pagina . "Vista.php";
} else {
    echo "pagina en construccion";
}