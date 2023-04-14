<?php
require_once 'Application.php';
require_once 'VideoStore.php';
require_once 'Video.php';

$videoStore = new VideoStore();
$application = new Application($videoStore);
$application->run();