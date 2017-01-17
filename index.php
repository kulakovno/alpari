<?php
require_once __DIR__ . '/autoload.php';
$objects = require_once __DIR__ . '/config.php';


$drawer = new \AlpariEditor\Drawers\Drawer2D();
$controller = new \AlpariEditor\Controllers\Controller($drawer);

$controller->run($objects);
