<?php
// sleep(10);
// print_r ($_POST);
print_r ($_FILES);

$ime = $_POST ['ime'];
$prezime = $_POST ['prezime'];
$slazeSe = isset($_POST['potvrda']);
$pol = $_POST ['pol'];
$poruka = $_POST ['poruka'];

$podaciOFajlu = $_FILES ['slika'];

// echo "Naziv poslatog fajla: " . $podaciOFajlu['name'];
// echo file_get_contents($podaciOFajlu['tmp_name']);
move_uploaded_file($podaciOFajlu['tmp_name'], $podaciOFajlu['name']);


// [slika] => Array
// (
//     [name] => Motorcycle.png
//     [full_path] => Motorcycle.png
//     [type] => image/png
//     [tmp_name] => /opt/lampp/temp/phpY7oIBw
//     [error] => 0
//     [size] => 260498
// )



