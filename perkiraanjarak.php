<?php
echo "TotalJarak = 500 </br>
MaxTank = 180 </br>
JarakSpbu = [100,140,150,200,330,360,400] </br>
Harga = [1000,2000,5000,1000,6000,4000,1000] </br>
";

$targetjarak = 500;
$totaljarak = 500;
$maxtank = 180;
$jaraktempuh = 0;
$totalharga = 0;
$pencapaianjarak = 0;

$array = array(100,140,150,200,330,360,400);
$array2 = array(1000,2000,5000,1000,6000,4000,1000);
$z = array();
foreach ($array as $key => $value) {
  // echo $value."</br>";
  // echo $array2[$key]."</br>";
  // echo "</br>";
  $z[$value] = $array2[$key];
}
// print_r($z);
asort($z);
// print_r($z);

foreach ($z as $key => $value) {
  if ($pencapaianjarak + $key == $targetjarak) {
    break;
  }
  // echo "</br>";
  // echo $maxtank;
  // echo "</br>";
  // echo "Pencapaian Jarak = ".$pencapaianjarak;
  // echo "</br>";
  // echo "Jarak Bensin = ".$key;
  if ($key - $pencapaianjarak > 180 || $key < $pencapaianjarak) {
    // echo "</br>";
    // echo "</br>";
    // echo "Jarak Tempuh ".$jaraktempuh;
    continue;
  }
  // echo "KEY ".$key;
  $jaraktempuh = $key - $pencapaianjarak;
  $pencapaianjarak += $jaraktempuh;
  // echo "</br>";
  // echo $jaraktempuh;
  // echo "</br>";
  $maxtank = $jaraktempuh - $key;
  $totaljarak = $totaljarak - $key;
  if ($maxtank < 180) {
    // echo "Harga Satuan = ".$value;
    // echo "</br>";
    // echo "Jarak = ".$jaraktempuh;
    // echo "</br>";
    // echo "Harga = ".$value;
    // echo "</br>";
    // echo "Tank = ".$maxtank;
    // echo "</br>";
    $totalharga += $jaraktempuh * $value;
    $maxtank = 180;
  }
  // echo $totaljarak." = Total Jarak </br>";
  // echo $maxtank." = Max Tank</br>";
  // echo "</br>";
  // echo "</br>";
  // echo "</br>";

  // break;
}
echo $totalharga." = Total Harga </br>";
 ?>
