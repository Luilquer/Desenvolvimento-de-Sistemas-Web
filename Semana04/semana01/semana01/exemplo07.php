<?php

function doisParametros($a, $b = 0) {
    if (isset($a)) {
        echo "a foi passado <br>";
    } 
    if (isset($b)) {
        echo "b foi passado <br>";
    }
}

echo "Passando dois argumentos: <br>";
doisParametros(1, 2);
echo "Passando um argumento: <br>";
doisParametros(3);
