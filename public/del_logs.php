<?php

require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'vendor', 'autoload.php']);
require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'Viewer.php']);
require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'InfoLogger.php']);

unlink(dirname(__DIR__).'/logs/logs.log');

ob_start();
$new_url = 'index.php';
header('Location: '.$new_url);
ob_end_flush();