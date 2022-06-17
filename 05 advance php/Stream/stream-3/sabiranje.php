<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

print_r($_GET);

$a = $_GET['a'];
$b = $_GET['b'];
echo $a + $b;
?>

