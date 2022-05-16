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