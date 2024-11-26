<?php


echo "Berapa nomormu?\n";
$mgp = trim(fgets(STDIN));

for ( $i = 1; $i <= $mgp; $i++) {
    for ($j=1; $j <= $mgp ; $j++) { 
      echo "$j, ";
    }
    echo "\n";
}


?>