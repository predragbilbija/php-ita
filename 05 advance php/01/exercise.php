<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// $person = array (
//     "name"=>"Peter",
//     "last_name"=>"Parker"
// );
// print_r($person);
// echo "<br><br>";
// // 

// $pt = array(
//     "x"=>10,
//     "y"=>50
// );
// print_r($pt);
// echo "<br><br>";
// // 

// $pt = array(
//     "x"=>10,
//     "y"=>50
// );

// $pt1 = new stdClass;
// $pt1->x = 30;
// $pt1->y = 70;
// $pt1->z = 120;

// echo "Point x: {$pt['x']} , y: {$pt['y']}";
// echo "<br>";
// echo "Point x: {$pt1->x} , y: {$pt1->y}";
// echo "<br>";
// print_r ($pt1);
// echo "<br><br>";
// // 

// $car = new stdClass;

// $car->manufacturer = "Peugeot";
// $car->model = "406";

// print_r($car);
// echo "<br>";
// var_dump($car);
// echo "<br>";

// echo "Car manufacturer: " . $car->manufacturer;
// echo "<br>";
// echo "Car model : " . $car->model;
// echo "<br><br>";
// // 

// class Point {
//     public $x;
//     private $y;
// }

// $pt = new Point;
// $pt->x = 10;
// $pt->y = 20;
// echo $pt->x;
// echo "<br><br>";
// // 


// class Point {
//     public $x = 25;
//     private $y = 10;

//     function f() {
//         echo $y; //nece raditi
//     }    
// }

// $pt = new Point;
// $pt->f();


// class Point {
//     public $x = 25;
//     public $y = 10;

//     function f() {
//         echo $this->x;
        
//     }    
// }

// $pt = new Point;
// $pt->f();

// $pt1 = new Point;
// $pt1->x =40;
// $pt1->f();

class Math {

    public $a;
    public $b;
    public function add() {
        echo $this->a + $this->b;

    }

}

$math = new Math;
$math->a = 20;
$math->b = 30;
$math->add();