<?php 
    class Point{
        public $x;
        public $y;

        public function __construct($a, $b){
            $this->x = $a;
            $this->y = $b;
        }

        public function calculateDistance(Point $other){
            return sqrt(pow($this->x - $other->x, 2) + pow($this->y - $other->y, 2));
        }
    }

    $point1 = new Point(3, 4);
    $point2 = new Point(3, 8);

    echo $point1->calculateDistance($point2);
?>