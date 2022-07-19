<?php
require "config.php";

$person = new Person;
$person->firstname = "pedja";
$person->lastname = "Jonson";

$person->Update();