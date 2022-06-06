<?php
echo '(1)';
?>

<?php
$keisan1 = 2 + 4 - 5 ; //1
$keisan2 = 4 - 5 + 2 ; //1
echo $keisan1 ;
echo '</br>';
echo $keisan2;
?></br>

<?php
$keisan3 = 4 * 5 / 2; //10
$keisan4 = 5 / 2 * 4; //10
echo $keisan3 ;
echo '</br>';
echo $keisan4 ;
?></br>

<?php
echo '(2)';
?>

<?php
$josan1 = 2 * 3 + 4 + 1; //11
$josan2 = 2 * (3 + 4 + 1); //16
echo $josan1;
echo'<br>';
echo $josan2;
?></br>

<?php
echo '(3)①';
?>

<?php
$username = "Admin";
if ($username == "Admin") {
    echo ("このように定数ともう一つを比較した際、
    同じであった場合trueが実行される。");
  } else {
    echo ("falseを実行するには条件が成り立たなかった場合に
    else文を入力することによる処理が必要となる。");
  }
?></br>

<?php
echo '②';
?>

<?php
$username = "Admin";
if ($username == "user") {
    echo ("このように定数ともう一つを比較した際、
    同じであった場合trueが実行される。");
  } else {
    echo ("falseを実行するには条件が成り立たなかった場合に
    else文を入力することによる処理が必要となる。");
  }
?></br>

<?php
echo '(4)';
?>

<?php
$basyo = array("Tokyo","Chiba","Kanagawa");
foreach($basyo as $value) {
    print($value);
    print("<br/>");
}
?></br>

<?php
echo '(5)';
?>

<?php
$basyo = array("Tokyo","Chiba","Kanagawa");
sort($basyo);
foreach($basyo as $value) {
    print($value);
    print("<br/>");
}
?></br>

<?php
echo '(6)';
?>

<?php
$list = array(
    array(
        'id'=>1,
        'name'=>'あ'
    ),
    array(
        'id'=>2,
        'name'=>'か'
    ),
    array(
        'id'=>3,
        'name'=>'さ'
    ),
    array(
        'id'=>4,
        'name'=>'た'
    )
);

echo 'foreach'."\n";
foreach($list as $key => $value){
    echo 'ID:'.$value['id'].'name:'.$value['name'].'<br>';
    }
?></br>

<?php
$list = array(
    array(
        'id'=>1,
        'name'=>'あ'
    ),
    array(
        'id'=>2,
        'name'=>'か'
    ),
    array(
        'id'=>3,
        'name'=>'さ'
    ),
    array(
        'id'=>4,
        'name'=>'た'
    )
);

while ($value = current($list)) {
    echo 'ID:'.$value['id'].'name:'.$value['name'].'<br>';
    next($list);
}

?>
