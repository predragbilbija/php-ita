<?php
$x = 10;
echo $x;
?>

<br>

<?php
$myVar = "Hello!";
echo $myVar;
?>

<br>

<?php
// Defines the variable with name x and the value 20
$x = 20;
//defines function f
function f()
{
  //Within a function, defines the variable x with value 10
  $x = 10;
  //Printing variables on the screen
  echo $x;
}
//Calling function f
f();
//Printing variable x
echo $x;
?>

<br>

<?php
// the addition of two numbers
//assigning a value to a variable x
$x=1;
// assigning a value to a variable y
$y=2;
// assigning a value to a variable z
$z=$x+$y;
//printing result
echo $z;
?>

<br>

<?php
// calculating the area of a circle
// defining constants PI
define("PI", 3.14);
// defining variable r
$r=10;
//calculating p
$p = ($r*$r)*PI;
echo $p;
?>

<br>

<?php
$price = 527.356;
$discount = 15;
$pricewithdiscount = $price - (($discount/100)*$price);
echo number_format($pricewithdiscount,2)
?>

<br>

