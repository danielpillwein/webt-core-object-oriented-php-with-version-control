<?php
require_once "VideoInterface.php";

abstract class Video implements VideoInterface
{
    private $name;

    function __construct($name)
    {
       $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}