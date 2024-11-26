<?php

// baca input
echo "Masukkan nomor favorit kamu  : \n";
$nomor = trim(fgets(STDIN));

echo "Nomor Favorit kamu $nomor\n";

// pecah input berdasarkan koma 
$array = explode(",", $nomor);

$array = array_map('intval', $array);

print_r($array)



?>