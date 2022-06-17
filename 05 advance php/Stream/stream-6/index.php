<!-- <div style='border:1px solid red;'>Beograd 9</div>
<div style='border:1px solid red;'>Novi Sad 8</div>
<div style='border:1px solid red;'>Nis 14</div> -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//baferovan

$images = array(
    "sun"=>"https://toppng.com/uploads/preview/sun-transparent-11546504690nfo5fapvt5.png",

    "cloud"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUxdTbfhIpD7h2Iu09VG4ZLfIAeIMsrcy0SQ&usqp=CAU"
);

$sadrzaj = file_get_contents("prognoza.txt");

$niz = explode("\n",$sadrzaj);
foreach($niz as $grad) {
    if($grad=="") {
        continue;
    }

    //Novi Sad|12
    $nazivITemperatura = explode("|",$grad);
    $nazivGrada = $nazivITemperatura[0];
    $temperatura = $nazivITemperatura[1];
    $slika = $temperatura <10 ? $images["cloud"] : $images["sun"];

    echo "<div style='border:1px solid red;'>{$nazivGrada} ({$temperatura}) <img src='$slika' width=20 align='top' > </div>";    
}

// $niz = file("prognoza.txt");
// foreach($niz as $grad) {
//         echo "<div style='border:1px solid red;'>{$grad}</div>";
// }