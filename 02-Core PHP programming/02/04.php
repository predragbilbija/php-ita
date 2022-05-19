<?php
$number = 5;
while ($number >= 2)
{
echo $number . "<br/>";
$number -= 1;
}
?>

<br>

<?php 
$i = 0;
while ($i++ < 3){
echo "first <br/>";
while (1){
echo "second <br/>";
while (1){
echo "third <br/>";
continue 3;
}
echo "This line will never be executed.<br/>";
}
echo "This line either.<br/>";
}
?>

<br>

<?php
$html = <<<HTML
<div style="#S#"> #I# </div>
HTML;
$divNum = 10;
$style = "border: 1px solid black; background: yellow; margin: 5px;
padding: 4px;";
$html = str_replace("#S#", $style, $html);
$i = 0;
do
{
echo str_replace("#I#", $i, $html);
$i++;
} while ($i < $divNum);
?>

<br>

<?php
$amount = 0;
$number = 0;
do
{
$number ++;
echo $amount. " + ". $number. " je jednako : ";
$amount = $amount + $number;
echo $amount. "<br />";
}
while ( $number!= 10 );
echo "<br />";
echo "Amount all numbers: ". $amount;
?>

<br>

<?php
$price = 5;
$counter= 10;
echo "<table border = \"1\" align = \"center\" >";
echo "<tr><th> Quantity </th>";
echo "<th>Price </th></tr>";
while ( $counter<= 100 ) {
echo "<tr> <td>";
echo $counter;
echo "</td> <td>";
echo $price * $counter;
echo "</td> </tr>";
$counter = $counter + 10;
}
echo "</table>";
?>

<br>

<?php
$number = 380;
do{
echo "Number: $number <br>";
$number++;
}while($number > 200 && $number < 400);
?>

<br>

<?php
$price = 999;
do{
echo "Current price: " . $price . " Still not for sale. </br>";
$price = $price + 1;
}while($price <= 1000);
echo "Current price: " . $price . " YOU CAN START WITH SALE !";
?>

<br>

<?php
$ctemp = -10;
while ($ctemp < 115) {
print ("$ctemp degrees C converts to ");
print (32 + $ctemp / 5 * 9 );
print (" degrees F and to ");
print ($ctemp + 273.1 );
print (" degrees K<BR>");
$ctemp = $ctemp + 20;
}
?>