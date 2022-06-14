<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class User {
    public function checkPass($pass) {
        return $this->password == $pass;
    }
    public function setCookies() {
        setcookie("userid",$this->id);

    }
}

$username = $_POST['username'];
$password = $_POST['password'];
$conn = new mysqli ("localhost","root","","g4_mojsajt");
$res = $conn->query("select * from users where username = '$username'");
$user = $res->fetch_object('User');

// $user = $res->fetch_object();

// if(!$user) {
//     die("aj cao");  
// } else {
//     if($user->password == $password) {
//         echo "ok je user";
//     } else {
//         die("ne valja ti sifra");
//     }
// }

if(!$user) {
    die("aj cao");  
} else {
    if($user->checkPass($password)) {
        $user->setCookies();
        echo "ok je user";
    } else {
        die("ne valja ti sifra");
    }
}


print_r($user);