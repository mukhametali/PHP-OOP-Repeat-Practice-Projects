<?php

require_once  "classes/File.php";

$file = new File(__DIR__ . "/file.txt");
$file->write('Ali cool 1');
$file->write('Ali cool 2');
$file->write('Ali cool 3');
$file->write('Ali cool 4');
$file->write('Ali cool 5');

