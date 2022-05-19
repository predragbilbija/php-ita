<?php
for($counter=1; $counter < 5; $counter++) {
echo "Welcome! <br/>";
}
?>

<br>

<?php
// creates a new array of five elements
$colors = array('red', 'green', 'blue', 'yellow','white');
for ($i = 0; $i < sizeof($colors); $i++)
{
$br = $i + 1;
echo "Value of element $br is $colors[$i].";
}
?>

<br>

<?php
for($i=0,$a=5;$i<10;$i++,$a++)
echo $i . ":" . $a . "<br>";
echo "This line do not depends of loop.";
?>

<br>

<?php 
$colors = "";
$myArray = array('red','green','blue');
echo "Colors contained in array: ";
foreach($myArray as $value){
$colors .= $value . " ";
}
echo $colors;
?>

<br>

<?php
$numElements = 20;
$rowEl = 10;
for($i=0;$i<$numElements;$i++)
{
if($i%$rowEl==0 && $i>0)
echo "<br/>";
echo "X";
}
?>

<br>

<?php 
$selectedNumber = 20;
for($i=1;$i<=$selectedNumber;$i++)
echo pow($selectedNumber,$i) . "<br>";
?>

<br>

<?php
$a = 5;
$b = 8;
for($i = 0; $i < $a; $i++)
{
echo $i;
for($u = 1; $u <= $b; $u ++)
{
if($u == $b || $i == 0 || $i == $a-1)
echo $u;
else
echo "0";
}
echo "<br>";
}
?>

<br>

<?php
$numberOfCharacters = 50;
$characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$allCharacters = $characters . strtolower($characters);
$pass = "";
for($i=0;$i<$numberOfCharacters;$i++)
$pass.=$allCharacters[rand(0,strlen($allCharacters)-1)];
echo $pass;
?>