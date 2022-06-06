<?php
echo "(1)";
$num = rand(0,100);
if ($num >= 75) {
    echo "75以上です。";
}elseif ($num >= 50) {
    echo "75以下50以上です。";
}else{
    echo "50未満です。";
}
?></br>

<?php
echo '(2)';

$number = rand(0,100);
$tensu = $number >= 50 ? '合格です。' : '不合格です。' ;
print $tensu ;
?></br>

<?php
echo '(3)';
$i = rand(1,4);
switch ($i) {
    case 1:
        echo "iは1に等しい";
        break;
    case 2:
        echo "iは2に等しい";
        break;
    case 3:
        echo "iは3に等しい";
        break;
    case 4:
        echo "iは4に等しい";
        break;
}
?></br>

<?php
echo '(4)';
//その数値以降の文章が表示されるようになる。
$i = rand(1,4);
switch ($i) {
    case 1:
        echo "iは1に等しい";
    case 2:
        echo "iは2に等しい";
    case 3:
        echo "iは3に等しい";
    case 4:
        echo "iは4に等しい";
}
?></br>

<?php
echo '(5)';
$i = rand(1,6);
switch ($i) {
    case 1:
        echo "iは1に等しい";
        break;
    case 2:
        echo "iは2に等しい";
        break;
    case 3:
        echo "iは3に等しい";
        break;
    case 4:
        echo "iは4に等しい";
        break;
    default:
        echo "エラーが発生しました。";
}
?></br>

<?php
echo '(6)';
$i = rand(1,4);
switch ($i) :
    case 1:
        echo "iは1に等しい";
        break;
    case 2:
        echo "iは2に等しい";
        break;
    case 3:
        echo "iは3に等しい";
        break;
    case 4:
        echo "iは4に等しい";
        break;
endswitch;
?></br>

<?php
echo '(7)';
$i = 0;
while($i <= 10){
  echo $i;
  $i++;
}
?></br>

<?php
echo '(8)';
$i = 0;
do{
  echo $i;
  $i++;
}while($i < 10);
?></br>

<?php
echo '(9)';
for ($counter = -3; $counter < 10; $counter++) {
    if($counter === 0){
    break;
   }
   echo 100 / $counter;
  }
?></br>

<?php
echo '(10)';
//0の場合のみスキップし次へ行く
for ($counter = -3; $counter < 10; $counter++) {
    if($counter===0){
    continue;
    }
    echo 100 / $counter;
  }
?></br>



