<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.01.2017
 * Time: 16:55
 */

namespace AlpariEditor;

use AlpariEditor\Objects;

class ObjectFactory
{
    public static function createObject($type, array $params = [])
    {
        $objectClass = ObjectRegistry::get($type);
        return new $objectClass($params);
    }
}