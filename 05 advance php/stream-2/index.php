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
interface imaMetodRender {
    function render();
}

abstract class Widget{
    abstract function render();
    abstract function getNaziv();
    function widgetInfo() {
        echo $this->getNaziv();
        echo "<br>";
        $this->render();
    }

}

class WidgetSpan extends Widget {
    function getNaziv() {
        return __CLASS__;
    }

    function render(){ 
        echo "<span>Cao iz spana</span>";
    }
}

class WidgetPoruka extends Widget {
    function getNaziv() {
        return __CLASS__;
    }

    function render () {
        echo "Cao kako si";
    }
}

class WidgetSlikaLink{
    function getNaziv() {
        return __CLASS__;
    }
    public $slika;
    public $link;
    function render () {
        echo "<div><img width=100 src=''/> <div>naslov</div> </div>";
    }
}

$w = new WidgetSlikaLink ;
$w->slika = "https://lumiere-a.akamaihd.net/v1/images/Darth-Vader_6bda9114.jpeg?region=0%2C23%2C1400%2C785&width=960";
$w->link = "https://www.starwars.com/databank/darth-vader";


class Pedja implements imaMetodRender {
    public function render() {
        echo "al sam te presao";
    }
} 

$p = new Pedja;
$p->render();

// abstraktne klase/ abstraktne metode/ interface

?>

<br>
<br>
<!--  -->

<?php

