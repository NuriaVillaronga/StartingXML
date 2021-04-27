<?php
include 'ObtenerObjXML.php';
class ObtenerDatos
{
    public static function obtener_Datos($nombre_fichero){
        $objetoXML= ObtenerObjXML::obxml($nombre_fichero);
        $datos_Obtener= array($objetoXML->Product->RecordReference,
            $objetoXML->Product->ProductIdentifier->IDValue,
            $objetoXML->Product->DescriptiveDetail->ProductFormDetail,
            $objetoXML->Product->DescriptiveDetail->Contributor->NameIdentifier->IDTypeName
        );
        return $datos_Obtener;
    }
}

