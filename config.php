<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.01.2017
 * Time: 19:08
 */

$objects = [
    ['type' => 'circle', 'params' => ['color' => 'red']],
    ['type' => 'square', 'params' => ['color' => 'green']]
];
\AlpariEditor\ObjectRegistry::set('\AlpariEditor\Objects\Circle', 'circle');
\AlpariEditor\ObjectRegistry::set('\AlpariEditor\Objects\Square', 'square');

return $objects;