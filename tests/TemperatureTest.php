<?php

namespace ChrTri\UnitConversions\Tests;

use ChrTri\UnitConversions\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();
        $this->assertEquals(212, $fahrenheit);
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
