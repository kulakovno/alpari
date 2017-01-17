<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.01.2017
 * Time: 17:41
 */

namespace AlpariEditor\Drawers;


use AlpariEditor\Objects\ObjectInterface;

class Drawer2D implements DrawerInterface
{
    public static function draw(ObjectInterface $object)
    {
        echo $object->getColor() . ' ' . $object->getForm() . ' drawn!' . PHP_EOL;
    }
}