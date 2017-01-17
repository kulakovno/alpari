<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.01.2017
 * Time: 17:45
 */

namespace AlpariEditor\Drawers;


use AlpariEditor\Objects\ObjectInterface;

class Drawer3D implements DrawerInterface
{
    public static function draw(ObjectInterface $object)
    {
        echo $object->getColor() . ' ' . $object->getForm() . ' drawn in 3D!' . PHP_EOL;
    }
}