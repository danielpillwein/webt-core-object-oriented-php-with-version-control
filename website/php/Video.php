<?php
require "VideoInterface.php";

abstract class Video implements VideoInterface
{
    private $name;
    private $html;
    private $source;

    function __construct($name, $html, $source)
    {
       $this->name = $name;
       $this->html = $html;
       $this->source = $source;
    }

    function getName()
    {
        return $this->name;
    }

    function getSource()
    {
        return $this->source;
    }

    function getHTML()
    {
        return $this->html;
    }
}