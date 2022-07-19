<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// $x = $_GET ['x'];
// echo $x;


// $x = $_COOKIE['x'];
// echo $x;

session_start();

$x = $_SESSION ['x'];
echo $x;
