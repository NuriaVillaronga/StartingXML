<?php
namespace OnixMessage\Product;

class ResourceVersion
{
    public $ResourceForm; //int
    public ResourceVersionFeature $ResourceVersionFeature; //array con 3 ResourceVersionFeature
    public $ResourceLink; //url, supongo string
    public ContentDate $ContentDate;
}

