<?php

function perkalian($per) {
  echo "Perkalian\n";
  for ($i=1; $i <= $per ; $i++) { 
    for ($j=1; $j <= $per ; $j++) { 
      echo $i*$j."\t";
    }
    echo "\n";
  }
}

perkalian(5);
echo "\n";

function kuadrat($pangkat) {
  echo "Kuadrat\n";
  for ($i=1; $i <= $pangkat; $i++) {
    for ($j=1; $j <= $pangkat; $j++) {
      echo $i**$j."\t";
    }
    echo "\n";
  }
}

kuadrat(5);
echo "\n";

function penambahan($tambah) {
  echo "Pertambahan\n";
  for ($i=0; $i <= $tambah; $i++) {
    for ($j=0; $j <= $tambah ; $j++) { 
      echo $i+$j."\t";
    }
    echo "\n";
  }
}

penambahan(5);

