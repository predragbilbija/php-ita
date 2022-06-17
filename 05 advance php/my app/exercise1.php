<?php
require "config.php";

$person = new Person;
$person->firstname = "Sally";
$person->lastname = "Jonson";

$person->Insert();