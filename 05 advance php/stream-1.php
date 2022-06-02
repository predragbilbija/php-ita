<?php 
class Widget {
    public $naslov;
    public $tekst;

    function f() {
        echo "cao";
    }
    
}

$w = new Widget;
$w1 = new Widget;

$w->naslov = "Zelite dobru platu?";
$w->tekst = "tekst  tekst tekst tekst";

$w1->naslov = "Sta kazu nasi polanici?";
$w1->tekst = "Nasi polaznici kazu: tekst tekst tekst"; 


// $w-> f(); //pozivanje funkcije f iz clase



