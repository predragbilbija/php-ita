<?php

// header("Set-Cookie: jezik=".$_GET['lng']);

setcookie("jezik",$_GET['lng'],time()+20);

$recnik = array(
    "en"=>"Hello,how are you?",
    "sr"=>"Cao,kako si?"
);

echo $recnik[$_GET['lng']];
?>

<select onchange="window.location='./?lng='+this.value">
<option>Odaberi jezik</option>
<option value="en">en</option>
<option value="sr">sr</option>
</select>

<iframe src="http://www.it-akademija.com"></iframe>