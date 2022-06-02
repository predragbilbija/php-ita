<?php 
require "widget.php";

$w = new Widget;
$w1 = new Widget;
$w2 = new Widget;

$w->naslov = "Zelite dobru platu?";
$w->tekst = "Zelim tekst tekst tekst";
$w->setColor("green");

$w1->naslov = "Sta kazu nasi polaznici?";
$w1->tekst = "Nasi polaznici kazu: tekst tekst tekst"; 

$w2->naslov = "This testiranje";
$w2->tekst = "Ovim this kupi info za novi widget iz fajla widget.php kao i za prethodne w i w1"; 



$w-> draw();
$w1-> draw();
$w2-> draw();

?>

<div style="width:200px; border:1px solid red;" >
<?php $w->draw(); ?>
</div>