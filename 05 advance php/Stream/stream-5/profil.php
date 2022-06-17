<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_COOKIE['userid'])){
    die("ne moze!");
}
$id = $_COOKIE['userid'];

$conn = new mysqli ("localhost","root","","g4_mojsajt");
$res = $conn->query("select * from users where id = '$id'");
$user = $res->fetch_object();

echo "Hey " . $user->username;