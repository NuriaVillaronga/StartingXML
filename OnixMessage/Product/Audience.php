<?php
namespace OnixMessage\Product;

class Audience
{
    public $AudienceCodeType; //int
    public $AudienceCodeValue; //int
    
    public function __construct($AudienceCodeType, $AudienceCodeValue){
        $this->AudienceCodeType = $AudienceCodeType;
        $this->AudienceCodeValue = $AudienceCodeValue;
    }
    
}

