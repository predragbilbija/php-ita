<?php

require "config.php";
$cars = array(
    "Mercedes","BMW","Suzuki","Honda"
);

$trucks = array(
    "SCANIA","KAMAZ","MACK"
);


$form = new FormHelper("GET","index.php?some_other_page=1");
$form->open_tag();
$form->select($cars,"cars",3);
$form->select($trucks,"trucks",1);
$form->input('text','my_text');
$form->input('checkbox','my_checkbox');
$form->input('submit','my_button','My Button');
$form->close_tag();


