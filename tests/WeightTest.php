<?php

namespace Spatie\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Spatie\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();
        $this->assertEquals(220.4623, $lbs);
    }


    /*
    Per lanciare il test :
    1) andare nella cartella \vendor\bin
    2) lanciare il comando phpunit UnitTest ../../tests/WeightTest.php
    C:\xampp\htdocs\package-training-php\unit-conversions\vendor\bin>phpunit UnitTest ../../tests/WeightTest.php

    In alternativa dalla root del progetto :
    call vendor/bin/phpunit UnitTest tests/WeightTest.php




     * */
}
