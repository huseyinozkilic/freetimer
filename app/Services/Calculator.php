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

    public function setBags($bags)
    {
        $this->bags = $bags;
        return $this->bags;
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

    public function calculateBags()
    {
        $x = $this->dimensions['width'] * $this->dimensions['length'] * 0.025;
        $y = $this->dimensions['depth'] * $x;

        $this->setBags($y);

        return ceil($y);
    }

    public function calculatePrice()
    {
        $x = $this->bags * 72;

        return $x;
    }

    public function saveToDb($args = []){
        $db = new \mysqli('localhost', 'freetimer', 'freetimer', 'freetimer');

        $insert = $db->query("INSERT INTO collection (width, length, measurement, depthmeasurement, bags, price) VALUES (" . $args['width'] . ", " . $args['length'] . ", '" . $args['meauserement'] . "', '" . $args['depthmeauserement'] . "', " . $args['bags'] . ", " . $args['price'] . ")");

        if($insert){
            $insert = $db->query("SELECT LAST_INSERT_ID() AS inserted_id");
            return $insert->fetch_object()->inserted_id;
        }else{
            return null;
        }
    }
}
