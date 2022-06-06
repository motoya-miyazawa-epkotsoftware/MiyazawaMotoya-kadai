<?php
echo '(1)';

$days =array('月曜日','火曜日','水曜日','木曜日',
'金曜日','土曜日','日曜日');
foreach($days as $day){
    echo $day;
    echo "<br>";
}
?></br>

<?php
echo '(2)';

$words = array('Dog' => '犬','Cat' => '猫',
'Bird' => '鳥','Monkey' => '猿');
foreach($words as $Eng => $Jp){
    echo "Eng:" . $Eng . ", Jp:" . $Jp . "\n";
  }
?></br>

<?php
echo '(3)';
echo $days[3];
echo '<br>';
echo $words['Bird'];
?></br>

<?php
echo '(4)';
echo count($days);
echo '<br>';
echo count($words);
?></br>

<?php
echo '(5)';
$test = array(
  ['aaa','あああ','AAA'],
  ['bbb','いいい','BBB'],
  ['ccc','ううう','CCC']
 );
 foreach ($test as $key => $value) {
   echo '<p>'.$key.':'.$value[0].' '.$value[1].' '.$value[2].'</p>';
 }
?>