<html>
<head>
<title> Arrays </title>
</head>
<body>
<p>
<?php
$colors = array( 'red', 'green', 'blue' );
echo "First color in array " . $colors[0] . "<br>";
echo "Second color in array " . $colors[1] . "<br>";
echo "Third color in array " . $colors[2] . "<br>";

?>
</p>
</body>
</html>

<br>

<?php 
$my_array = array("red","green","blue","yellow","purple");
echo(sizeOf($my_array));
echo "<br/>";
echo(count($my_array));
?>

<br>

<?php
$arr = array( 2, 5, 1, 7, 4, 3, 8 );
for( $i = 0; $i < sizeof( $arr ); $i++ )
{
$min = $i;
for( $u = $i; $u < sizeof( $arr ); $u++ )
{
if( $arr[ $u ] < $arr[ $min ] )
$min = $u;
}
$tmp = $arr[ $i ];
$arr[ $i ] = $arr[ $min ];
$arr[ $min ] = $tmp;
}
print_r( $arr );
?>

<br>

<?php
$arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8);
for($i=0; $i<sizeof($arr); $i++){
if($i>0){
echo $arr[$i] * $arr[$i-1]."<br>";
}else{
echo $arr[ $i ]."<br>";
}
}
?>

<br>

<?php
$lipsum = "Lorem Ipsum is simply dummy text of the printing and
typesetting industry. Lorem Ipsum has been the industry's standard
dummy text ever since the 1500s, when an unknown printer took a
galley of type and scrambled it to make a type specimen book. It has
survived not only five centuries, but also the leap into electronic
typesetting, remaining essentially unchanged. It was popularised in
the 1960s with the release of Letraset sheets containing Lorem Ipsum
passages, and more recently with desktop publishing software like
Aldus PageMaker including versions of Lorem Ipsum.";
$arr = explode(" ", $lipsum);
$words = array();
$counts = array();
for($i=0; $i<sizeof($arr); $i++){
if(!in_array($arr[$i], $words)){
$words[] = $arr[ $i ];
$counts[] = 1;
}else{
for($u=0; $u<sizeof($words); $u++){
if( $words[ $u ] == $arr[ $i ]){
$counts[ $u ]++;
}
}
}
}
for($i=0; $i<sizeof($words); $i++){
echo($words[$i] . " : " . $counts[$i] . "<br>");
}
?>

<br>

<?php
$price['milk'] = 89;
$price['chocolate'] = 75;
$price['cheese'] = 105;
foreach ($price as $key => $value) {
echo $key . '=>' . $value . '<br/>';
}
?>