<?php $x = 015;
echo (int) $x;
?>

<br>

<?php
$number = 879.22;
echo number_format($number);
?>

<br>

<?php
$number = 879.223456;
echo number_format($number, 2);
?>

<br>

<?php
$x = 123456789.123;
echo number_format($x, 2, "*", "/");
?>

<br>
<!-- radice  samo na linux -->
<?php
/* $number = 2234.16;
setlocale(LC_MONETARY, 'en_US');
print money_format('%n', $number);
print money_format('%i', $number);
setlocale(LC_MONETARY, 'fr_FR');
print money_format('%i', $number);*/
?>
<!-- 
resenje bi bilo
SAD: $2,234.16
USD: 2,234.16
2 234.56 EUR 
-->

<br>

<?php
$x = 015;
printf("Octal x is: %o, decimal is %d, and binary is %b", $x, $x, $x);
?>

<br>

<?php
echo 'Current date: ' . date('d-n-Y');
echo '<br/>';
echo 'Current time:' . date('g:i:s a');
?>

<br>

<?php
$time = getdate();
printf('%s,%d,%d', $time['month'], $time['mday'], $time['year']);
?>

<br>

<?php
$newDate = date_create('2015-3-20 10:15:55');
echo date_format($newDate, 'd.m.Y / H-i-s');
?>

<br>

<?php
$date = date_create('2015-01-01');
echo date_format($date, 'Y-m-d H:i:s');
?>

<br>

<?php
$date = new DateTime('2015-01-01');
echo $date->format('Y-m-d H:i:s');
?>

<br>

<?php
$x = "11793847250045684";
echo $x;
?>

<br>

<?php
echo "Current time: " . Date("h:i") . "h, day is: " . Date("D/M/y");
echo '<br>';
echo "Current time: " . Date("h:i") . ", day is: " . Date("d/m/Y");
?>