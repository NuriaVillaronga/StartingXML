<?php

require '../vendor/autoload.php';
use Nuria\Proyecto2\MostrarPantalla;
    
$mostrar = new MostrarPantalla();
$mostrar->mostrarPantalla('../book.xml')
//MostrarPantalla::mostrarPantalla('./book.xml'); si mostrar pantalla fuese static

?>
