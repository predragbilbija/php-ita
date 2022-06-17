<?php 
if(isset($_POST['grad'])) {
    $red = $_POST['grad'] . "|" . $_POST['temperatura'] . PHP_EOL;
    file_put_contents("prognoza.txt",$red,FILE_APPEND);
}

?>

<form method="post">
    <input type="text" name="grad">
    <input type="number" name="temperatura">
    <input type="submit" value="unesi">
</form>