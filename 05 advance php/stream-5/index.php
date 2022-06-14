<?php

header("Set-Cookie: test=test cookie");

$recnik = array(
    "en"=>"Hello,how are you?",
    "sr"=>"Cao,kako si?"
);

echo $recnik[$_GET['lng']];