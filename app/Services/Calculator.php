<?php

namespace App\Services;

class Calculator
{
    private $measurementUnit; //(metres, feet, or yards)
    private $depthMeasurementUnit; //(centimetres or inches)
    private $dimensions; //(width, length, and depth)
    public $bags;
    public $price;

    public function setMeasurementUnit($unit)
    {
        $this->measurementUnit = $unit;
        return $this->measurementUnit;
    }

    public function setDepthMeasurementUnit($unit)
    {
        $this->depthMeasurementUnit = $unit;
        return $this->depthMeasurementUnit;
    }

    public function setDimensions($width, $length, $depth=1.4)
    {
        $this->dimensions = [
            'width' => $width,
            'length' => $length,
            'depth' => $depth
        ];

        return $this->dimensions;
    }

    public static function calculateBags($args = [])
    {
        $x = $args['width'] * $args['length'] * 0.025;
        $y = $args['depth'] * $x;

        return ceil($y);
    }

    public static function calculatePrice($bags)
    {
        $x = $bags * 72;

        return $x;
    }

    public function saveToDb($args = []){
        $db = new \mysqli('localhost', 'freetimer', 'freetimer', 'freetimer');

        return $db->query("INSERT INTO collection (width, length, measurement, depthmeasurement, bags, price) VALUES (" . $args['width'] . ", " . $args['length'] . ", '" . $args['meauserement'] . "', '" . $args['depthmeauserement'] . "', " . $args['bags'] . ", " . $args['price'] . ")");
    }
}
