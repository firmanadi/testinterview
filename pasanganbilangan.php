<?php
$x = array(1, 5, 6, 1, 0, 1);
$x2 = array_unique($x);
print_r($x2);
$y = 6;
$z = array();
echo "Input : </br>X = [". implode(', ', $x)."
]</br>Y = ".$y
;
echo "</br>";
foreach ($x2 as $key => $value) {
  foreach ($x as $key2 => $value2) {
    if ($value+$value2 == $y) {
      if (!in_array([$value,$value2], $z))
      {
        // array_push($z,[$value,$value2]);
        echo $value . " dan " . $value2 . " jika dijumlahkan " . $y ."</br>";
      }
    }
  }
}
// for ($i=1; $i <= 6 ; $i++) {
//   foreach ($x as $key => $value) {
//     if ($value+$i == $y) {
//       echo $value . " dan " . $i . " jika dijumlahkan " . $y ."</br>";
//       // echo $i.' = i </br>';
//       // echo $value.' = value ';
//     }else {
//       // echo $i.' i </br>';
//       // echo $value.' value ';
//     }
//   }
//   // echo "<h2>break<h2>";
// }
array_unique($z);
print_r($z);
?>
