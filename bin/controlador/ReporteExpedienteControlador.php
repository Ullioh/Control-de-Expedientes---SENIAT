<?php
use modelo\ReporteExpedienteModelo as ReporteExpediente;
use config\componentes\configSistema as configSistema;
session_start();
if (!isset($_SESSION['usuario'])) {
    echo '<script>window.location.href="?pagina=Login";</script>';
}
$config = new configSistema;
$ReporteExpedientes = new ReporteExpediente();
if (!is_file($config->_Dir_Model_().$pagina.$config->_MODEL_())) {
    echo "Falta definir la clase " . $pagina;
    exit;
}
if (is_file("vista/" . $pagina . "Vista.php")) {

    if (isset($_POST['accion'])) {
        $accion = $_POST['accion'];
        $modulo = 'Bitacora Expedientes:';

        if ($accion == 'generar_reporte_expediente') {
            $datos = $ReporteExpedientes->buscar_expedientes($_POST['nro_expediente']);
            echo json_encode($datos);
            return 0;
            exit;
        }
    }

    require_once "vista/" . $pagina . "Vista.php";
    
} else {
    echo "pagina en construccion";
}