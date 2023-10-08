<?php


class Rectangle extends Shape
{
    function __construct(string     $name,
                         public int $width,
                         public int $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    function calculateArea(): float|int
    {
        return $this->height * $this->width;
    }

    function calculatePerimeter(): float|int
    {
        return ($this->height + $this->width) * 2;
    }
}