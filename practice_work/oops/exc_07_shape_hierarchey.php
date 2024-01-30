<?php 
    class Shape{
        // common properties
    }

    class Circle extends Shape{
        public $radius;

        public function __construct($rad){
            $this->radius = $rad;
        }

        public function calculateArea(){
            return pi() * pow($this->radius, 2);
        }
        public function calculatePerimeter(){
            return 2 * pi() * $this->radius;
        }
    }

    class Rectangle extends Shape{
        public $length;
        public $width;

        public function __construct($len, $wid){
            $this->length = $len;
            $this->width = $wid;
        }

        public function calculateArea(){
            return $this->length * $this->width;
        }
        public function calculatePerimeter(){
            return 2 * ($this->length + $this->width);
        }
    }

    $circle = new Circle(9);
    $rect = new Rectangle(4, 5);
    echo "Circle area : " . $circle->calculateArea() . "<br>";
    echo "Rectangle perimeter : " . $rect->calculatePerimeter() . "<br>";
?>