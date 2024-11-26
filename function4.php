<?php

// function type declaration
function sum(int $frist, int $last)
{
  $total = $frist + $last;
  echo "total $frist + $last = $total" . PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false);
// sum([], []);

?>