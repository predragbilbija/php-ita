<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$gradovi = array (
    "0"=>"Pariz",
    "1"=>"Moskva",
    "2"=>"Madrid",
    "3"=>"Barcelona",
    "4"=>"Juneau"
);

echo "Odabrao si grad : ";
echo $gradovi [$_GET['grad']];
?>

<select onchange="window.location='?grad='+this.value">
    <?php 
    foreach($gradovi as $k=>$v) {
        echo "<option value='{$k}'> {$v} </option>";
    }
    ?>
</select>