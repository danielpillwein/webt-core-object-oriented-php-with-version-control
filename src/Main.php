<?php
require "YouTube.php";
require "Vimeo.php";

$videos = [];

$videos[] = new YouTube("Top 50 Players in CS History", "yTu1ODceGn4");
$videos[] = new YouTube("Schärfstes Thunfischmesser", "Wj5FVhbd8ps");
$videos[] = new YouTube("Dr. Alice Weidel wieder mal perfekt", "zsLGGDRJMqA");
$videos[] = new YouTube("The Ballerina - Short Horror Film", "sTtmpFIaFqc");
$videos[] = new YouTube("Unendlichen Kreislauf bauen", "iylKpM-3gaA");

$videos[] = new Vimeo("Funny Vimeo", "754250610");
$videos[] = new Vimeo("Scary Vimeo", "752974412");
$videos[] = new Vimeo("Five Nights at Freddie", "751950004");
$videos[] = new Vimeo("IN TENTS", "50985622");
$videos[] = new Vimeo("Nightcrawlers", "746286212");

foreach ($videos as $video) {
    echo '<div class="video-container">';
    echo $video->getHTML();
    echo '<p class="title">' . $video->getName() . '</p>';
    echo '<p class="origin">' . $video->getSource() . '</p>';
    echo '</div>';
}