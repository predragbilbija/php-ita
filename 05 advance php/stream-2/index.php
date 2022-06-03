<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Covek { 
    // public $prezime;
    static $opis = "Definicija coveka";
    public $novac;
}

// $objekat = new Covek;
// $objekat1 = new stdClass;

// $objekat->ime = "Jovan";
// $objekat1->ime = "Pedja";


// print_r ($objekat);
// print_r ($objekat1);

$vlada = new Covek;
// $vlada->ime = "Vlada";
$vlada->novac = 100;

$petar = new Covek;
$petar->novac = 99;
// $instanca->instancniClan

$petar->novac += $vlada->novac;
$vlada->novac = 0;


echo Covek::$opis;

Covek::$opis = "Nije ovo definicija coveka";
echo Covek::$opis;

$vlada->novac =50;

print_r ($vlada);
print_r ($petar);

?>

<br>
<br>

<!-- -->


<?php

class Pas {
    static $brojNoguPsa = 4;
    public $ime;
    public $brojNogu;
    static function zvuk() {
        echo "Psi laju";
    }
    function laj() {
        echo "Vau Vau";
    }

}

$dzeki = new Pas;
$dzeki->ime = "Dzeki";
$dzeki->brojNogu = 3;
$dzeki->laj();

Pas::zvuk();

print_r($dzeki);

//razlika izmedju statickih i instancnih clanova
?>

<br>
<br>
<!--  -->


<?php





