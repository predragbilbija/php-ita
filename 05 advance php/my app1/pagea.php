<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// $x = $_GET ['x'];
// echo $x;

// echo $_COOKIE ['user_id'];

// $x = $_COOKIE['x'];
// echo $x;

session_start();
echo $_SESSION['user_password'];
?>

<!-- <a href="pageb.php?x=<?php echo $x; ?>">page_b</a> -->