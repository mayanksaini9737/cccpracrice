<?php

// class A
// {
//     public $var1;
//     public $var2;

//     public static function __set_state($an_array)
//     {
//         $obj = new A;
//         $obj->var1 = $an_array['var1'];
//         $obj->var2 = $an_array['var2'];
//         return $obj;
//     }   
// }

// $a = new A;
// $a->var1 = 5;
// $a->var2 = 'foo';

// $b = var_export($a, true);
// var_dump($b);
// eval('$c = ' . $b . ';');
// var_dump($c);



// class C {
//     private $prop;

//     public function __construct($val) {
//         $this->prop = $val;
//     }

//     public function __debugInfo() {
//         return [
//             'propSquared' => $this->prop ** 2,
//         ];
//     }
// }

// var_dump(new C(42));

// class SubObject
// {
//     static $instances = 0;
//     public $instance;

//     public function __construct() {
//         $this->instance = ++self::$instances;
//     }

//     public function __clone() {
//         $this->instance = ++self::$instances;
//     }
// }

// class MyCloneable
// {
//     public $object1;
//     public $object2;

//     function __clone()
//     {
//         // Force a copy of this->object, otherwise
//         // it will point to same object.
//         $this->object1 = clone $this->object1;
//     }
// }

// $obj = new MyCloneable();

// $obj->object1 = new SubObject();    // 1
// $obj->object2 = new SubObject();    // 2
// // print_r($obj->object2);

// $obj2 = clone $obj; // 3


// print "Original Object:\n";
// print_r($obj);
// echo "<br>";
// print "Cloned Object:\n";
// print_r($obj2);

// var_dump($obj === $obj2);


// echo "Today is: ". date("d.m.y l");
// echo date_default_timezone_get();    // Europe/Berlin

// date_default_timezone_set("Asia/Kolkata");
// echo date_default_timezone_get();    // Asia/kplkata

// echo "Time is: ". date("h.i.s a");
$str = strtotime("tomorrow");
echo date('Y-m-d', $str);
?>