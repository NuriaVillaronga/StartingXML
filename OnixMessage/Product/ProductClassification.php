<?php
namespace OnixMessage\Product;

class ProductClassification{
    
    public int $ProductClassificationType; 
    public int $ProductClassificationCode; 
    
    public function __construct($ProductClassificationType, $ProductClassificationCode){
        $this->ProductClassificationType = $ProductClassificationType;
        $this->ProductClassificationCode = $ProductClassificationCode;
    }
}