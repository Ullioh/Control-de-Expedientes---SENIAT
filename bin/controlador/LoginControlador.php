<?php
/* use modelo\LoginModelo as Login;
use config\componentes\configSistema as configSistema;

$config = new configSistema;
$login = new Login;

if (!is_file($config->_Dir_Model_().$pagina.$config->_MODEL_())) {
    echo "Falta definir la clase " . $pagina;
    exit;
} */
if (is_file("vista/" . $pagina . "Vista.php")) {
   
    require_once "vista/" . $pagina . "Vista.php";
} else {
    echo "pagina en construccion";
}