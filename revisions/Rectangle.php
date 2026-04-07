<?php

class Rectangle extends Shape
{

    protected float $length;
    protected float $width;

    public function __construct(
        float $length, float $width, string $color   
    )
    {
        $this->length = $length;
        $this->width = $width;
        parent::__construct($color);
    }

    public function calculateArea():float
    {
        return $this->length * $this->width;
    }


}