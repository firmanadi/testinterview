<?php
echo 'colMap = [3, 2]</br>';
echo 'keterangan: dimana 3 adalah jumlah kursi sebelah kiri dan 2 adalah kursi
sebelah kanan dan secara horizontal</br>';
echo '</br>';

echo 'rowTotal = 3</br>';
$x = array();
$y = array();
$a = array();
$b = array();
$z = array();
$count = 1;
for ($i=1; $i <= 3 ; $i++) {
  for ($j=1; $j <= 5 ; $j++) {
    if ($j > 3) {
      $y[$j] = $count;
    }else {
      $x[$j] = $count;
    }
    $count = $count + 1;
  }
  array_push($a,$x);
  array_push($b,$y);
}
$z = array_merge($a,$b);
print_r($z);

 ?>
