<?php
require_once "Video.php";

class Vimeo extends Video
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
        return "Vimeo";
    }

    function getHTML()
    {
        return "<iframe src=\"https://player.vimeo.com/video/{$this->videoId}\" frameborder=\"0\" allow=\"autoplay; fullscreen; picture-in-picture\" allowfullscreen></iframe>";
    }
}