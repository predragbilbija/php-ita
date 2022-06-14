<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//nebaferovan

$images = array(
    "sun"=>"https://toppng.com/uploads/preview/sun-transparent-11546504690nfo5fapvt5.png",

    "cloud"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUxdTbfhIpD7h2Iu09VG4ZLfIAeIMsrcy0SQ&usqp=CAU"
);

$file = fopen("prognoza.txt","r"); //r-citaj / w-pisi / a-pisi ali dodaj na postojece//
while(!feof($file)) {
    $red = fgets($file);
    $gradITemperatura = explode("|", $red);
    $grad = $gradITemperatura[0];
    $temperatura = trim($gradITemperatura[1]);
    // if($temperatura<10) {
    //     $slika = $images['cloud'];
    // } else {
    //     $slika = $images['sun'];
    // }
    $slika = $images[$temperatura>9?"sun":"cloud"];
    echo $grad . " (" . $temperatura . ")" . "<img src='$slika' align='top' width='20' >" . "<br>";
}



fclose($file);