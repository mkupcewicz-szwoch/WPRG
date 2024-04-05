<?php
function fibonacci($n) {
    $fibTablica = array();

    $fibTablica[0] = 0;
    $fibTablica[1] = 1;

    for ($i = 2; $i <= $n; $i++) {
        $fibTablica[$i] = $fibTablica[$i - 1] + $fibTablica[$i - 2];
    }
    
    return $fibTablica;
}

function print_odd_fibonacci($fibTablica) {
    foreach ($fibTablica as $key => $value) {
        if ($value % 2 != 0) {
            echo ($key + 1) . ": " . $value . "<br>";
        }
    }
}

$N = 10;
$fibonacci_sequence = fibonacci($N);
echo "Nieparzyste liczby Fibonacciego do $N:<br>";
print_odd_fibonacci($fibonacci_sequence);
?>