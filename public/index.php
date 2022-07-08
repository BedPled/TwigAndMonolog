<?php

require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'vendor', 'autoload.php']);
require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'Viewer.php']);
require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'InfoLogger.php']);

date_default_timezone_set("Asia/Vladivostok");

$view = new Viewer();
$view->show('index.twig');
$logger = new InfoLogger('page_1.php');

echo '<div class="container">';
$logger->createLogs();
echo '<div>';