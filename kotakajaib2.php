<?php

echo "Berapa nomormu?\n";
$mgp = trim(fgets(STDIN));

for (
  $i = $mgp;
  $i > -10;
  $i = $i - 1
) {
  echo "$i, ";
}

?>