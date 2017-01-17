<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.01.2017
 * Time: 16:46
 */

namespace AlpariEditor\Objects;


interface ObjectInterface
{
    public function getColor();

    public function setColor($color);

    public function getForm();
}

