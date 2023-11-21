<?php

$total = 0;

function soma($val1, $val2) {
    //global $total;
    $total = $val1 + $val2;
}

soma(5, 3);

echo $total;