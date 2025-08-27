<?php

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $num; $i++) { 
        if ($num % $i == 0) {
            return false; 
        }
    }
    return true; 
}

echo "Prime numbers from 1 to 100 are: <br>";

for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . "<br>"; 
    }
}

?>