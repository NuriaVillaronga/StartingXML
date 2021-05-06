<?php
namespace OnixMessage\Product;

class RecordSourceIdentifier{
    
    public int $RecordSourceIDType; 
    public int $IDValue; 
    
    public function __construct($RecordSourceIDType,$IDValue){
        $this->RecordSourceIDType = $RecordSourceIDType;
        $this->IDValue = $IDValue;
    }
}