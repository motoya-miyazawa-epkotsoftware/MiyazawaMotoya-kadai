<?php
function kasan($num1,$num2){
    return $num1 + $num2;
}
$kasan = kasan($num1,$num2);
?>

<?php
function gensan($num1,$num2){
    return $num1 - $num2;
}
$gensan = gensan($num1,$num2);
?>

<?php
function jousan($num1,$num2){
    return $num1 * $num2;
}
$jousan = jousan($num1,$num2);
?>

<?php
function warisan($num1,$num2){
    return $num1 / $num2;
}
$warisan = warisan($num1,$num2);
?>

<?php
function joyo($num1,$num2){
    return $num1 % $num2;
}
$joyo = joyo($num1,$num2);
?>

<?php
function kasan2(&$a,$b){
    $a = $a + $b;
}
$a = 15;
$b = 12;
?>

<?php
function gensan2(&$a,$b){
    $a = $a - $b;
}
$a = 15;
$b = 12;
?>

<?php
function josan2(&$a,$b){
    $a = $a * $b;
}
$a = 15;
$b = 12;
?>

<?php
function warisan2(&$a,$b){
    $a = $a / $b;
}
$a = 15;
$b = 12;
?>

<?php
function joyo2(&$a,$b){
    $a = $a % $b;
}
$a = 15;
$b = 12;
?>