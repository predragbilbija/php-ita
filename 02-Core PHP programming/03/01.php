<?php
$file = "test";
$validExtension = "php";
switch( $validExtension )
{
case "php":
include $file . ".php";
break;
case "html":
include $file . ".html";
break;
case "js":
include $file . ".js";
break;
}
?>

<br>

