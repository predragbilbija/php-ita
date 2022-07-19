<?php

if(isset($_POST['btn_submit'])) {
    echo "Hello from form";

    $username = $_POST['tb_name'];
    $password = $_POST['tb_pass'];

    $conn = mysqli_connect("localhost","root","","exercise");
    $result = mysqli_query($conn,"select * from users where firstname = '{$username}' and password = '{$password}'");

    $user = mysqli_fetch_object($result);

    if($user) {
        echo "hello " . $user->firstname;
    } else {
        echo "User does not exist";
    }

} else {
    echo "Not from form";
}