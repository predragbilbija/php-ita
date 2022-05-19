<?php
$string = "myMail@mail.ml";
$pattern = "/^[a-zA-Z0-9]+\@[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/";
echo preg_match($pattern,$string);
?>

<br>

<?php
$string = "http://myPage.php?id=25&cat=18&user=34";
$pars = explode("?",$string);
$pars = explode("&",$pars[1]);
$parsedPars=array();
for($i=0;$i<sizeof($pars);$i++)
{
$currentParam = explode("=",$pars[$i]);
$parsedPars[$currentParam[0]] = $currentParam[1];
}
print_r($parsedPars);
?>

<br>

<?php
$string = "http://myDomain/home/index.php?id=25&cat=18&user=34";
$pars = preg_replace("/http:\/\//","",$string);
$pars = preg_replace("/\?[a-zA-Z0-9=&]+/","",$pars);
print_r($pars);
?>