<?php
//Ejemplos de formas de hacerlo
/*
$fichero = file_get_contents ( './book.xml');
echo $fichero;
*/

/*
function leer_fichero_completo($nombre_fichero){
    $fichero_texto = fopen ($nombre_fichero, "r");
    $contenido_fichero = fread($fichero_texto, filesize($nombre_fichero));
    fclose($fichero_texto);
    return $contenido_fichero;
}
echo leer_fichero_completo('./book.xml');
*/

 function leer_fichero_completo($nombre_fichero){
    $fichero = file_get_contents ($nombre_fichero);
    return $fichero;
}
//echo leer_fichero_completo('./book.xml')*/

//-------------------
//crea otra función que reciba como entrada el contenido del fichero y retorne un objeto xml
function obxml($fichero){
    $fichero2 = simplexml_load_string($fichero);
    return $fichero2;
}
//var_dump(obxml(leer_fichero_completo('./book.xml')));

//---------------------
/*crea otra función que dado el objeto xml obtengas los siguientes el valor de los datos RecordReference, 
ProductIdentifier/ProductFormDetail, Contributor/NameIdentifier/IDTypeName y TextContent/Text*/
function obtener_Datos($nombre_fichero){
    $objetoXML= obxml(leer_fichero_completo($nombre_fichero));
    echo $objetoXML->Product->RecordReference ."\n";
    echo $objetoXML->Product->ProductIdentifier->IDValue ."\n";
    echo $objetoXML->Product->DescriptiveDetail->ProductFormDetail ."\n";
    echo $objetoXML->Product->DescriptiveDetail->Contributor->NameIdentifier->IDTypeName;
}
obtener_Datos('./book.xml');

?>