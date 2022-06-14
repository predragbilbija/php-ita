<?php
$jezik = $_COOKIE['jezik'];

// echo $domaci;

// print_r(apache_request_headers());

$recnik = array(
    "en"=>"Hello,how are you?",
    "sr"=>"Cao,kako si?"
);

echo $recnik[$jezik];