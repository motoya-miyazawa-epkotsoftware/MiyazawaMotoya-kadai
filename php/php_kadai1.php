<?php
echo '(1)';
$string1 = 'abcd';
$string2 = 'abcd';
if(strcasecmp($string1 , $string2 ) == 0){
    echo '文字列は同じです。';
}
?></br>

<?php
echo '(2)';
$name = 'Motoya';
$place = 'Chiba';

echo $name.'Miyazawa'.$place;
?></br>

<?php
echo '(3)';
$full_name = 'MotoyaMiyazawa';
$age = 24;
echo $full_name.$age;
?></br>

<?php
echo '(4)';
?>
<?php
define("PHP", 'Hello World');
echo PHP; // 'Hello World' を出力します
?></br>

<?php
const moji = 'ハローワールド';
echo moji;
?></br>

<?php
echo '(5)';
?></br>

<?php
var_dump(__FILE__);
echo '<br>';
var_dump(__LINE__);
?><br>

<?php
echo '(6)';
?>

<?php
$number = 300;
$number = $number / 365;
echo $number;
?></br>

<?php
echo '(7)';
?>

<?php
$i = 38;
echo $i++.'<br>';
echo $i;
?></br>

<?php
echo '(8)';
?>

<?php
$i = 38;
echo $i--.'<br>';
echo $i;
?></br>

<?php
echo '(9)';
?>

<?php
$a = 38;
$b = 1;

echo --$a.'</br>';
echo $b++.'</br>';
echo $b;
?></br>

<?php
echo '(10)';
?>

<?php
$test = 3;
$price = 2;
echo $test + $price;
?></br>

<?php
echo '(11)';
?>

<?php
$str = "1234";
echo $str;
echo '<br>';
var_dump($str);
?></br>

<?php
echo '(12)';
?>

<?php
$locations =  3 ;
$c = 2 + $locations;
print($c);
?>