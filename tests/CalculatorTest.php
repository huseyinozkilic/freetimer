<?php
use App\Calculate;

class CalculateTest extends \PHPUnit\Framework\TestCase
{
    public function testCalculateBags()
    {
        $width = 10;
        $length = 20;
        $expected = 7;

        $instance = new Calculate();
        $instance->setMeasurementUnit('meter');
        $instance->setDimensions($width, $length);
        $result = $instance->calculateBags();

        $this->assertEquals($expected, $result);
    }
}
