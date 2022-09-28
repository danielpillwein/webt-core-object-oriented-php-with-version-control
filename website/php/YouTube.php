<?php
require "Video.php";

class YouTube extends Video
{
    private $name;
    private $videoId;

    function __construct($name, $videoId)
    {
        parent::__construct($name, $this->videoIdToHTML($videoId), "YouTube");
    }

    function videoIdToHTML($videoId)
    {
        return "<iframe src=\"https://www.youtube.com/embed/{$videoId}\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
    }
}