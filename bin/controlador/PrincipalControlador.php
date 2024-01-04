<?php
/* use modelo\PrincipalModelo as Principal;

use config\componentes\configSistema as configSistema;

$config = new configSistema;


if (!is_file($config->_Dir_Model_().$pagina.$config->_MODEL_())) {
    echo "Falta definir la clase " . $pagina;
    exit;
}
 */

session_start();
if (!isset($_SESSION['usuario'])) {
    echo '<script>window.location.href="?pagina=Login";</script>';
}

if (is_file("vista/" . $pagina . "Vista.php")) {
    var_dump($_SESSION['usuario']);
    require_once "vista/" . $pagina . "Vista.php";
} else {
    echo "pagina en construccion";
}