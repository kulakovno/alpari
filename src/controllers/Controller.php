<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.01.2017
 * Time: 16:51
 */

namespace AlpariEditor\Controllers;


use AlpariEditor\Drawers\DrawerInterface;
use AlpariEditor\ObjectFactory;

class Controller implements ControllerInterface
{
    protected $drawer;

    public function __construct(DrawerInterface $drawer)
    {
        $this->drawer = $drawer;
    }

    public function run(array $objects = [])
    {
        foreach ($objects as $object) {
            if (!isset($object['type'])) {
                continue;
            }

            try {
                $object = ObjectFactory::createObject($object['type'], $object['params']);
                $this->drawer->draw($object);
            } catch (\Exception $e) {
                echo $e->getMessage() . PHP_EOL;
            }
        }
    }
}
