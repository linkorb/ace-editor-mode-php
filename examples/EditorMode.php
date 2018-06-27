<?php

require_once __DIR__.'/../vendor/autoload.php';

use Linkorb\Ace\AceEditorMode;

// Path to the file//
$filePath = '/var/www/html/example/array.php';

$fileInfo = pathinfo($filePath);
$aceEditorMode = new AceEditorMode();
$aceMode = $aceEditorMode->getAceMode($fileInfo['extension']);

echo $aceMode;
