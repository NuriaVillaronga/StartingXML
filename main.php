<?php
include dirname(__DIR__).'/MostrarPantalla.php';
use Nuria\Proyecto2\{LeerFichero, ObtenerDatos, ObtenerObjXML, MostrarPantalla}; 
//Importo todas las clases del espacio de nombres Nuria\Proyecto2

$mostrar = new MostrarPantalla();
$mostrar->mostrarPantalla('./book.xml')
//MostrarPantalla::mostrarPantalla('./book.xml'); si mostrar pantalla fuese static
?>
