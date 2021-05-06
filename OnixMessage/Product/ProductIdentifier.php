<?php
namespace OnixMessage\Product;

class ProductIdentifier
{
    public int $ProductIDType; 
    public int $IDValue; 
    
    public function __construct($ProductIDType,$IDValue){
        $this->ProductIDType = $ProductIDType;
        $this->IDValue = $IDValue;
    }
}