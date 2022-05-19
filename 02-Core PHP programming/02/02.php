<?php 
$category = "news";
switch ( $category)
{
case "news" :
echo ' <p> News from the world ... </p> ';
break;
case "politics" :
echo ' <p> Politics... </p> ';
break;
case "sport" :
echo ' <p> Last sport results ... </p> ';

break;
default :
echo ' <p> Welcome... </p> ';
}
?>

<br>

<?php 
$way = "b";
switch ($way){
case "a":
echo '<p> Regular customer ... </p>';
break;
case "b":
echo '<p> Customer has found us over the TV commercial.... </p>';
break;
case "c":
echo '<p> Recommendation... </p>';
break;
default :
echo '<p> We don t know how customer found us...</p>';
}
?>

<br>

<?php
$a = 0;
switch(++$a) {
case 3 :
echo 3;
break;
case 2:
echo 2;
break;
case 1:
echo 1;
break;
default :
echo "No matching...";
break;
}
?>

<br>

<?php
define( "MONDAY", 1 );
define( "TUESDAY", 2 );
define( "WEDNESDAY", 3 );
define( "THURSDAY", 4 );
define( "FRIDAY", 5 );
$day = MONDAY;
switch( $day ){
case MONDAY:
$description = "First day of week";
break;
case TUESDAY:
$description = "Second day of week";
break;
case WEDNESDAY:

$description = "Third day of week";
break;
case THURSDAY:
$description = "Forth day of week";
break;
case FRIDAY:
$description = "Fifth day of week";
break;
default:
$description = "no description";
break;
}
echo $description;
?>

<br>

<?php
$operator = "-";
$operand1 = 2;
$operand2 = 3;
switch($operator)
{
case "+":
$result = $operand1 + $operand2;
break;
case "-":
$result = $operand1 - $operand2;
break;
case "*":
$result = $operand1 * $operand2;
break;
case "/":
$result = $operand1 / $operand2;
break;
default:
$result = "Unknown result.";
}
echo $result;
?>

<br>

<?php
$numberOfEntries = 0;
switch ($numberOfEntries){
case 0 :
echo ' Welcome! You can start with learning...';
break;
case 20 :
echo ' It is time for test...';
break;
case 30 :
echo ' You have developed a condition for completion of the
course....';
break;
}
?>