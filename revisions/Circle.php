<?php

class Circle extends Shape
{
    protected float $radius;

    public function __construct(float $radius, string $color)
    {
        $this->radius = $radius;
        parent::__construct($color);
    }

    public function calculateArea(): float
    {
        //pow($this->radius, 2)
        return round(pi() * $this->radius**2,  2);
    }

}
