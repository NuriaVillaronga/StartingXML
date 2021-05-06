<?php
namespace OnixMessage\Product;

class SupplyDetail
{
    public Supplier $Supplier;
    public ReturnsConditions $ReturnsConditions;
    public $ProductAvailability; //int
    public $PackQuantity; //int
    public Price $Price; //array con 3 price
}

