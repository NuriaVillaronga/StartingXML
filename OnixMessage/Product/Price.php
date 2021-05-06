<?php
namespace OnixMessage\Product;

class Price
{
    public $PriceType; //int
    public DiscountCoded $DiscountCoded; //puede o no estar

    public $PriceStatus; //int
    public $PriceAmount; //float
    public Tax $Tax;
    public $CurrencyCode; //string
    public Territory $Territory;
    public $PrintedOnProduct; //int
    public $PositionOnProduct; //int
}

