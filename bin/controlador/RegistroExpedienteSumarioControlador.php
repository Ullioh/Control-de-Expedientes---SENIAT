<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    echo '<script>window.location.href="?pagina=Login";</script>';
}
if (is_file("vista/" . $pagina . "Vista.php")) {
    require_once "vista/" . $pagina . "Vista.php";
} else {
    echo "pagina en construccion";
}