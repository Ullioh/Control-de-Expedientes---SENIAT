<?php
if (is_file("vista/" . $pagina . "Vista.php")) {
    require_once "vista/" . $pagina . "Vista.php";
} else {
    echo "pagina en construccion";
}
