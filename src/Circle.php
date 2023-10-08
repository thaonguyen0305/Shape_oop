<?php 
class Circle extends Shape 
{
    function __construct(string $name,
                         public float $radius)
    {
        parent::__construct($name, $radius);
        $this->radius = $radius;
    }

    function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }

    function calculatePerimeter(): float
    {
        return pi() * $this->radius * 2;
    }
}

?>