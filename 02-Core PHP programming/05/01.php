<?php
function clean_string($string)
{
$string = str_replace("<", "", $string);
$string = str_replace(">", "", $string);
$string = str_replace("'", "", $string);
return $string;
}
$userName = "myName<";
$password = "myPa>sswo'rd";
$userName = clean_string(trim($userName));
$password = clean_string(trim($password));
if(trim($userName) == "" || trim($password) == "")
die("invalid credentials");
echo "valid credentials";
?>

<br>

<?php
$lipsum = "Lorem Ipsum is simply dummy text of the printing and
typesetting industry.";
$izlaz = (strlen( $lipsum ) > 15) ?substr( $lipsum, 0, 12 )."...":
$lipsum;
echo $izlaz;
?>

<br>

