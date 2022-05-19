<?php 
// creating function stars
function stars(){
    echo "**********************************************<br>";
    }
    //calling function stars
    stars();
    echo "title <br>";
    //calling function stars
    stars();
    echo "Some text";
?>

<br>

<?php
// function stars( $cityName )
// {
// for( $i=0; $i<35; $i++ )
// echo "*";
// echo " " . $cityName . " ";
// for( $x= ( $i + 2 ) + strlen ( $cityName ); $x < 90; $x++ )
// echo "*";
// }
// stars( "Belgrade" );
// echo "< br > Text about Belgrade < br >";
// stars( "Paris" );
// echo "< br > Text about Paris < br >";
// stars( "London" );
// echo "< br > Text about London < br >";
?>

<br>

<?php
$myAninimousFunction = create_function('$a,$b','return $a + $b;');
echo $myAninimousFunction(2, 4);
?>

<br>

<?php
function helloFunction()
{
echo "Hello<br />";
}
$function_holder = "helloFunction";
$function_holder();
?>

<br>

<?php
function str_reverse($str){
$rez = "";
for($i=strlen($str)-1; $i>=0; $i--){
$rez.=$str[$i];
}
return $rez;
}
$text = "my string";
echo str_reverse($text);
?>

<br>

<?php
define("SQUARE", 0);
define("RECTANGLE", 1);
define("CIRCLE", 2);
define("PI", 3.14);
function area($type, $a, $b = 0){
$rez = 0;
switch($type)
{
case SQUARE:
$rez = pow($a, 2);
break;
case RECTANGLE:
$rez = $a * $b;
break;
case CIRCLE:
$rez = pow($a, 2) * PI;
break;
}
return $rez;
}
echo area(CIRCLE, 4);
?>