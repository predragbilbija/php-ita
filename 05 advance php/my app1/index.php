<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $x = 10;
// echo $x;


// setcookie("your_cookie","Hello from your cookie", time()+60);
// setcookie("user_id","123456");

// $x = 25;
// setcookie ("x",$x);

// session_start();

// $_SESSION['x'] = 15;
// $_SESSION['y'] = 25;
// $_SESSION['z'] = 'hello';

$x = 15;
$user_password = "12345";
session_start();

$_SESSION['x'] = $x;
$_SESSION['user_password'] = $user_password;
?>

<!-- <a href="pagea.php?x=<?php echo $x; ?>">page_a</a> -->