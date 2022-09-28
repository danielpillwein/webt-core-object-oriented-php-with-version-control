<?php
require "YouTube.php";

$video1 = new YouTube("Top 50 Players in CS History", "yTu1ODceGn4");

echo $video1->getHTML();
