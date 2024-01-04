<?php
use modelo\PrincipalModelo as Principal;
use config\componentes\configSistema as configSistema;

session_start();
if (!isset($_SESSION['usuario'])) {
    echo '<script>window.location.href="?pagina=Login";</script>';
}
$config = new configSistema;
$principal = new Principal();
if (!is_file($config->_Dir_Model_().$pagina.$config->_MODEL_())) {
    echo "Falta definir la clase " . $pagina;
    exit;
}
if (is_file("vista/" . $pagina . "Vista.php")) {
    $r1 = $principal->totalexpedientes(); 
    $r2 = $principal->expedientesrevision();
    $r3 = $principal->expedientesproceso(); 
    $r4 = $principal->expedientesarchivados(); 
    
    require_once "vista/" . $pagina . "Vista.php";
} else {
    echo "pagina en construccion";
}