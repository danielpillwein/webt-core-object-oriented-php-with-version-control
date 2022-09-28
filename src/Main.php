<?php
require "YouTube.php";
require "Vimeo.php";

$videos = [];

$videos[] = new YouTube("Top 50 Players in CS History", "yTu1ODceGn4");
$videos[] = new YouTube("Top 50 Players in CS History", "yTu1ODceGn4");
$videos[] = new YouTube("Top 50 Players in CS History", "yTu1ODceGn4");
$videos[] = new YouTube("Top 50 Players in CS History", "yTu1ODceGn4");
$videos[] = new YouTube("Top 50 Players in CS History", "yTu1ODceGn4");

$videos[] = new Vimeo("Funny Vimeo", "754250610");
$videos[] = new Vimeo("Funny Vimeo", "754250610");
$videos[] = new Vimeo("Funny Vimeo", "754250610");
$videos[] = new Vimeo("Funny Vimeo", "754250610");
$videos[] = new Vimeo("Funny Vimeo", "754250610");

foreach ($videos as $video) {
    echo $video->getHTML();
}