<?php

function luas_lingkaran($r)
{
  return 3.14 * $r * $r;
}

echo "Masukkan jari-jari Lingkaran :";
$r = trim(fgets(STDIN));

$hasil = luas_lingkaran($r);

echo "luas lingkaran : $hasil\n";

?>