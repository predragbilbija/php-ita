<!-- 1. U beskonačnoj for petlji ispisati brojeve 0 1 2 3 4 posle čega se dešava prekid. -->
<?php
$i=0;
for(;;)
{
echo $i++." ";
if($i==5) break;
}
?>

<!--  2. Pronaći zbir prvih 100 brojeva -->
<?php
$suma=0;
for($i=1;$i<=100;$i++)
{
$suma+=$i; 
}
echo "<br>Suma prvih".($i-1)." brojeva je $suma<br>"; 
?>


<!-- 3. Ispisati matricu tako da se na spoljnom obodu nalazi "X", na glavnoj dijagonali "D", na
sporednoj dijagnali "S", a na ostalim pozicijama "H". -->

<?php
for($i=1;$i<=10;$i++)
{
for($j=1;$j<=10;$j++)
{
if($i==1 || $i==10 || $j==1 || $j==10) echo "X";
else if($i==$j) echo "D";
else if($i+$j==11) echo "S";
else echo "H";
}
echo "<br>";
} ?>


<!-- 4. Pokazati na primeru kako se naredbom break direktno iskače iz spoljne petlje. -->

<?php
$number=1;
while(true)
{
while($number<5)
{
if($number==3)
{
break(2);
}
echo "Number: ".$number."<br>";
$number++;
}
}
echo "<br>Program nastavlja"; 
?>

<br>
<!-- 5. Prikazati na primerima da nareba continue direktno skače na novo inkrementiranje brojača. -->

<?php
for($i=1;$i<=5;$i++)
{
if($i==3) continue;
echo $i;
}
echo "<br>";
$i=1;
while($i<=5)
{
echo $i++;
if($i==3) continue;
} ?>

<br>
<!-- 5.1 Kako uraditi while petlju da izlaz bude isti kao i kod for petlje? -->

<?php
// for($i=1;$i<=5;$i++)
// {

// if($i==3) continue;
// echo $i;
// } ?>


<?php
$i=0;
while($i<5)
{
if(++$i==3) continue;
echo $i;
} ?>


<br>
<!-- 6. Odkloniti problem beskonačne petlje tako da se na izlazu dobije 235612345 -->

<?php
// $i=1;$j=1;
// while($j<=5)
// {
// while($i<=5)
// {
// if($i==3) continue 2;
// echo $i;
// }
// echo $j++;
// } ?>


<?php
$i=1;$j=1;
while($j<=5)
{
while($i<=5)
{
if($i++==3) continue 2;
echo $i;
}
echo $j++;
} ?>

<br>
<!-- 7. Pronaći sumu svih članova zadatog niza. -->

<?php
echo "<br>";
$niz=array(11,2,13,41,52);
$suma = 0;
for($i=0;$i<count($niz);$i++)
$suma+=$niz[$i]; 
echo $suma;
?>

<!-- 8. Pronaći maksimalni i minimalni element u nizu. -->

<?php
$max = $niz[0];
for($i=1;$i<count($niz);$i++)
if($niz[$i]>$max) $max=$niz[$i];
echo "Max je ".$max."<br>";
$min = $niz[0];
for($i=1;$i<sizeof($niz);$i++)
if($niz[$i]<$min) $min=$niz[$i];
echo "Min je $min";
?>

<br>
<!-- 9. Prikazati padajuću listu bez i sa upotrebom petlje. -->

<select>
<option>Stavka 1</option>
<option>Stavka 2</option>
<option>Stavka 3</option>
<option>Stavka 4</option>
<option>Stavka 5</option>
</select>

<select>
<?php
for($i=1;$i<=5;$i++)
{
echo "<option>Stavka $i</option>";
}
?>
</select>

<br>
<br>
<!-- 10. Pokazati ispis padajuće liste, kombinacijom PHP koda i HTML tagova van PHP koda -->

<select>
<?php
for($i=1;$i<=20;$i++)
{
?>
<option>
<?php
echo "Stavka $i";
?>
</option>
<?php
}
?>
</select>

<br>
<!-- 11. Kako ubaciti vrednosti u tabelu? -->
<?php
$a=7;$b=5;
echo "<table border=1>";
echo "<tr><th>a</th><th>b</th></tr>";
for($i=1;$i<=3;$i++)
{
echo "<tr><td>$a</td><td>$b</td></tr>";
}
echo "</table>";
?>


<!-- 12. Napraviti niz od 7 boja. Potrebno je da se u zavisnosti od rednog broja dana u nedelji menja
boja pozadine. -->

<!-- <html>
<head>
<title>Pozadinska boja</title>
</head>
<?php
$today = date("w");
$bgcolor = array("#BA55D3", "#0000FF", "#00FFFF", "#228B22",
"#FFA500", "#FFFF00", "#FF0000");
?>
<body bgcolor="<?php print("$bgcolor[$today]");?>">
<br>Ovo je boja za danasnji dan.
</body>
</html> -->


<!-- 13. Napraviti jednostavnu stranicu za prijavljivanje na sistem preko korisničkog imena i
lozinke. -->

<!-- <!DOCTYPE html>
<html>
<head>
<title>Logovanje</title>
</head>
<body>
<h2>LOGIN IN</h2>
<form method="POST">
<input type="user" placeholder="Unesite email" name="user">
<input type="pass" placeholder="Unesite password" name="pass">
<input type="submit" value="Login" name="submit">
</form>
</body>
</html>
<?php
// $validUser = "predrag";
// $validPass = "1012";
// if(isset($_POST["user"]) && isset($_POST["pass"]))
// {
// $user = $_POST["user"];
// $pass = $_POST["pass"];
// if ($user==$validUser && $pass==$validPass)
// echo "Uspesno logovanje";
// else echo "Neuspesno logovanje";
// }
?> -->

<br>
<!-- 14. Ispisati matricu 2x2. -->

<?php
$a[0][0]="ivan";
$a[1][0]="kristijan";
$a[0][1]="jovan";
$a[1][1]="predrag";
for($i=0;$i<2;$i++)

{
for($j=0;$j<2;$j++)
echo $a[$i][$j]." ";
echo "<br>";
}
?>

<!-- 15. Kreirati matricu preko asocijativnih nizova i ispisati ključeve i vrednosti. -->

<?php
$a = array("jovan"=>array(0=>1,1=>2));
$a["predrag"] = array(0=>4,1=>5);
print_r($a);
echo "<br>";
foreach($a as $k=>$v)
foreach($v as $k2=>$v2)
echo $k2." ".$v2."<br>";
?>

<!-- 16. Proveriti da li korisnik ima pravo pristupa, pri čemu se dozvoljeni korisnici nalaze u
zadatom nizu. -->

<?php
$username = "Bruce2";
$password = "Betmen";
$users = array(
"Peter"=>"Spajdermen",
"Klark"=>"Supermen",
"Bruce"=>"Betmen"
);
$brojac=0;
foreach($users as $k=>$v)
{
if($k==$username && $v==$password)
{
echo "Hello $username";
break;
}
$brojac++;

}
if($brojac==count($users)) echo "Invalid user";
?>

<!-- 17. Prikazati upotrebu naredni implode i explode pri čemu se koristi graničnik ||. -->

<?php
$c = array("1","2","3","4","5");
$d = implode(",",$c);
print_r($d);
echo $d;
$d = "1||2||3||4||5";
$e = explode('||',$d);
echo "<br>";
foreach($e as $prom)
{
echo $prom." ";
} ?>

<!-- 18. Ispisati sve brojeve do 100 koji su deljivi samo sa 3, samo sa 5, i istovremeno i sa 3 i sa 5. -->
<?php
for ($i=1;$i<=100;$i++)
{
if ($i%15==0) echo "$i: i sa 3 i sa 5.<br>";
else if($i%3==0) echo "$i: samo sa 3.<br>";
else if($i%5==0) echo "$i: samo sa 5.<br>";
} ?>

<!-- 19. Napisati program koji stvara niz bez upotrebe ključne reči array i funkciju koja ga ispisuje. -->

<?php
$niz = [
["username", "password"],
["Mika", "mik123"],
["Sima", "123sim"],
["Pera", "12per3"]
];
function pisi($arr) // arr dobija vrednost $niz
{
for($i=0; $i<count($arr); $i++)
{
for($a=0; $a<count($arr[$i]); $a++)
{
echo $arr[$i][$a].' ';
}
echo '<br>';
}
}
pisi($niz);
?>

<!-- 20. Kreirati funkciju last koja vraća poslednji element u nizu -->

<?php
$a= array(4, 6, 2, 22, 11,5);
function last($a)
{
foreach($a as $i);
return $i;
}
echo last($a)+last($a);
?>

