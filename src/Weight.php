<?php

namespace Spatie\UnitConversions;

class Weight
{
    private $kilograms;
    public  static function fromKilograms(float $kilograms){
        return new static($kilograms);
    }
    public function __construct(float $kilograms)
    {
        $this->kilograms=$kilograms;
    }

    public function toLbs(){
        return $this->kilograms*2.204623;
    }
}
