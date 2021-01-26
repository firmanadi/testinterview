<?php
$x = array(1,2,3,4,5,6,8,9,10);
$y = range(1,10);
$missingx = array_diff($y, $x);
echo "Input = X : " . implode(', ', $x);
echo "</br>";
echo "Output = Y : " . implode(', ', $missingx);
?>
