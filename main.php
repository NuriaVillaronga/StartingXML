<?php
include 'MostrarPantalla.php';
use Nuria\Proyecto2\MostrarPantalla; //Hay que hacer referencia al paquete en concreto que se quiere importar

$mostrar = new MostrarPantalla();
$mostrar->mostrarPantalla('./book.xml')
//MostrarPantalla::mostrarPantalla('./book.xml'); si mostrar pantalla fuese static
?>
