<?php

class Cylinder extends Circle
{
    function __construct(string $name,
                         float $radius,
                         public int $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    function calculateArea(): float
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    function calculateVolume(): float
    {
        return parent::calculateArea() * $this->height;
    }
}