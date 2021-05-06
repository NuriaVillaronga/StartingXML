<?php
namespace OnixMessage\Product;

class Measure{
    
    public int $MeasureType; 
    public int $Measurement; 
    public string $MeasureUnitCode; 
    
    public function __construct($MeasureType, $Measurement, $MeasureUnitCode){
        $this->Measurement = $MeasureType;
        $this->Measurement = $Measurement;
        $this->MeasureUnitCode = $MeasureUnitCode;
    }
}