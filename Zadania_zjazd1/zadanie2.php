<?php
//
function is_prime($number) {
    if ($number <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function print_primes_in_range($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if (is_prime($i)) {
            echo $i . " ";
        }
    }
}
$start = 1;
$end = 50;

echo "Liczby pierwsze w zakresie od $start do $end:<br>";
print_primes_in_range($start, $end);
?>
