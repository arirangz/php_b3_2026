<?php
abstract class Shape
{
    protected string $color;
    public static int $count = 0;

    public function __construct(string $color)
    {
        $this->color = $color;
        self::$count++;
    }

    public abstract function calculateArea():float;

    /**
     * Get the value of color
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     */
    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }
}