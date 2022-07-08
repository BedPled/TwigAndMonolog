<?php

require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'vendor', 'autoload.php']);
require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'Viewer.php']);
require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'InfoLogger.php']);

unlink($_SERVER['DOCUMENT_ROOT'].'/logs/logs.log');

ob_start();
$new_url = 'index.php';
header('Location: '.$new_url);
ob_end_flush();