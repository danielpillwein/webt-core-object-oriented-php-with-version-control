<?php
require "Video.php";

class Vimeo extends Video
{
    private $name;
    private $videoId;

    public function __construct($name, $videoId)
    {
        parent::__construct($name, $this->videoIdToHTML($videoId), "Vimeo");
    }

    function videoIdToHTML($videoId)
    {
        return "<iframe src=\"https://player.vimeo.com/video/{$videoId}\" frameborder=\"0\" allow=\"autoplay; fullscreen; picture-in-picture\" allowfullscreen></iframe>";
    }
}