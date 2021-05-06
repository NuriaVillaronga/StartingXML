<?php
namespace OnixMessage\Header;

class Header
{
    public Sender $Sender;
    public Addressee $Addressee;
    public $MessageNumber; //int
    public $SentDateTime; //string
    public $MessageNote; //string
}

