<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.01.2017
 * Time: 17:57
 */

namespace AlpariEditor\Objects;


use AlpariEditor\Exceptions\NotAllowedException;
use AlpariEditor\Exceptions\UnknownPropertyException;

abstract class Object implements ObjectInterface
{
    protected $params;
    protected $form;

    public function __construct($params)
    {
        $this->params = $params;
    }

    public function __get($name)
    {
        $getter = 'get' . $name;

        if (method_exists($this, $getter)) {
            return $this->$getter();
        }

        throw new UnknownPropertyException('Getting unknown property: ' . get_class($this) . '::' . $name);
    }

    public function __set($name, $value)
    {
        $setter = 'set' . $name;

        if (method_exists($this, $setter)) {
            $this->$setter($value);
            return;
        }

        if (method_exists($this, 'get' . $name)) {
            throw new NotAllowedException('Setting read-only property: ' . get_class($this) . '::' . $name);
        }

        throw new UnknownPropertyException('Setting unknown property: ' . get_class($this) . '::' . $name);
    }

    public function getColor()
    {
        return isset($this->params['color']) ? $this->params['color'] : null;
    }

    public function setColor($color)
    {
        return $this->params['color'] = $color;
    }

    public function getForm()
    {
        return $this->form;
    }

}