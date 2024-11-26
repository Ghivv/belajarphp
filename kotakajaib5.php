<?php

/*
PR
membuat tabel perkalian
*/


echo "Tabel Perkalian\n";
echo "\n";
echo "Masukkan Angka Perkalian: ";
$angka_perkalian = trim(fgets(STDIN));

for ($i=1; $i <= $angka_perkalian ; $i++) { 
  echo "$i";
}

for ($i=1; $i <= $angka_perkalian ; $i++) { 
  for ($j=1; $j <= $angka_perkalian ; $j++) { 
    echo "".($i * $j)."";
  }
  echo "\n";
}

?>