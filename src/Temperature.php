<?php
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 10/06/2020
 * Time: 09:05
 */

namespace ChrTri\UnitConversions;


class Temperature
{
    private $celsius;

    public static function  fromCelsius($celsius){
        return new static($celsius);
    }

    public function __construct($celsius)
    {
        $this->celsius=$celsius;
    }
    public function toFahrenheit(){
        return ($this->celsius *1.8)+32;
    }
}
