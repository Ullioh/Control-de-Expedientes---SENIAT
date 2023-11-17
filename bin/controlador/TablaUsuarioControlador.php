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

    $r1 = $usuario->listar();
    $r2 = $usuario->listararea();
    require_once "vista/" . $pagina . "Vista.php";
} else {
    echo "pagina en construccion";
}