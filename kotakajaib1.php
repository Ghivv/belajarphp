<?php

// $kuy = array(1, 2, 3, 4, 5, 6, 8, 9);
// var_dump($kuy);

echo "Berapa nomormu?\n";
$mgp = trim(fgets(STDIN));

for (
  $i = 1;
  $i < $mgp + 1;
  $i = $i + 1
) {
  echo "$i, ";
}


?>