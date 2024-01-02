<?php
use modelo\BitacoraExpedientesModelo as bitacoraExpedientes;
use config\componentes\configSistema as configSistema;
session_start();
if (!isset($_SESSION['usuario'])) {
    echo '<script>window.location.href="?pagina=Login";</script>';
}
$config = new configSistema;
$bitacoraExpedientes = new bitacoraExpedientes();
if (!is_file($config->_Dir_Model_().$pagina.$config->_MODEL_())) {
    echo "Falta definir la clase " . $pagina;
    exit;
}
if (is_file("vista/" . $pagina . "Vista.php")) {

    if (isset($_POST['accion'])) {
        $accion = $_POST['accion'];
        $modulo = 'Bitacora Expedientes:';
    }

    $r1 = $bitacoraExpedientes->listar();
    require_once "vista/" . $pagina . "Vista.php";
    
} else {
    echo "pagina en construccion";
}