<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.01.2017
 * Time: 17:07
 */

namespace AlpariEditor;


use AlpariEditor\Exceptions\InvalidException;
use AlpariEditor\Exceptions\NotAllowedException;

class ObjectRegistry
{
    private static $objects = [];

    private static $allowed = ['circle', 'square'];

    public static function set($objectClass, $key)
    {
        if (!in_array($key, self::$allowed)) {
            throw new NotAllowedException('Key not allowed ' . $key);
        }
        self::$objects[$key] = $objectClass;
    }

    public static function get($key)
    {
        if (!in_array($key, self::$allowed) || !isset(self::$objects[$key])) {
            throw new InvalidException('Invalid key ' . $key);
        }
        return static::$objects[$key];
    }
}