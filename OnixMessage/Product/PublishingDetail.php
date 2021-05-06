<?php
namespace OnixMessage\Product;

class PublishingDetail
{
    public Imprint $Imprint;
    public Publisher $Publisher;
    public $CityOfPublication; //string
    public $CountryOfPublication; //string
    public $PublishingStatus; //int
    public PublishingDate $PublishingDate;//array con 3 publishingDate
    public SalesRights $SalesRights;//array con 2 salesrigths
    public $ROWSalesRightsType; //int
}

