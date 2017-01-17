<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.01.2017
 * Time: 17:42
 */

namespace AlpariEditor\Drawers;


use AlpariEditor\Objects\ObjectInterface;

interface DrawerInterface
{
    public static function draw(ObjectInterface $object);
}