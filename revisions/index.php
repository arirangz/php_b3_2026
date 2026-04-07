<?php

require_once "Shape.php";
require_once "Rectangle.php";
require_once "Circle.php";

$rectangle1 = new Rectangle(10, 20, "red");

// echo $rectangle1->calculateArea()."<br>";
//echo $rectangle1->getColor()."<br>";

$circle1 = new Circle(15, "blue");
echo $circle1->calculateArea();
