<?php
require_once "Video.php";

class YouTube extends Video
{
    private $name;
    private $videoId;

    function __construct($name, $videoId)
    {
        parent::__construct($name);
        $this->videoId = $videoId;
    }

    function getSource()
    {
        return "YouTube";
    }

    function getHTML()
    {
        return "<iframe src=\"https://www.youtube.com/embed/{$this->videoId}\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
    }
}