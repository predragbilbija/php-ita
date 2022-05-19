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

<?php
for($i=0;$i<1000;$i++)
if($i%3 == 0 && $i != 0)
echo $i . "<br>";
?>

