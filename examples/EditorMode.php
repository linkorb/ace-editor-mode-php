<?php

require_once __DIR__.'/../vendor/autoload.php';

use LinkORB\Ace\AceEditorMode;

// Path to the file//
$filePath = 'array.php';

$fileInfo = pathinfo($filePath);
$aceEditorMode = new AceEditorMode();
$aceMode = $aceEditorMode->getAceMode($fileInfo['extension']);

echo $aceMode;
