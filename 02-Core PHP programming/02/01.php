<?php
$number = 15;
if ($number < 10) {
echo "Number is less than 10. ";
}
elseif ($number == 10) {
echo "Number is equal 10. ";
}
else {
echo "Number is greater than 10. ";
}
?>

<br>

<?php 

$day = 15;
$month = 2;
$year = 2013;
$result = checkdate( $month, $day, $year);
if ($result == true)
{
echo "Date is correct.";
}
else
{
echo "Date is incorrect.";
}

?>

<br>

<?php
$page = "index";
if( $page == "index" ){
$page = "index.html";
}elseif( $page == "products" ){
$page = "products.html";
}else{
$page = "login.html";
}
echo $page;
?>

<br>

<?php
$lastStatus = 2;
$status = 4;
$statusName = "unknown";
if($status == 1)
$statusName = "stays";
else if($status == 2)
$statusName = "moves";
else if($status == 3)
$statusName = "dissapear";
else if($status == 4)
{
if($lastStatus == 2)
$statusName = "dissapear";
else
$statusName = "unknown";
}
echo $statusName;
?>


<br>

<?php
$secretNumber = 765;
if ($_GET['number'] == $secretNumber )
{
echo ' <p> Congratulations!!! </p> ';
}
elseif( abs($_GET['number'] - $secretNumber) < 10 )
{
echo ' <p> You are near to the result!!! </p> ';
}
else
{
echo ' <p> Try again!!! </p> ';
}
?>

<br>

<?php 
$chairs = 100;
if ( $chairs < 10)
{
$discount = 0;
}
elseif ( $chairs <= 49 )
{
$discount = 5;
}
elseif ( $chairs <= 99 )
{

$discount = 10;
}
elseif ( $chairs >= 100 )
{
$discount = 15;
}
echo $discount;
?>