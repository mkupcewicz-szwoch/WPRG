<?php

$owoce = array("papaja", "mango", "marakuja");

foreach ($owoce as $owoc) {
    $dlugosc = strlen($owoc);
    for ($i = $dlugosc - 1; $i >= 0; $i--) {
        echo $owoc[$i];
    }
    
    if (strtolower($owoc[0]) == 'p') {
        echo " owoc zaczyna się od litery 'p'";
    } else {
        echo " owoc nie zaczyna się od litery 'p'";
    }
    echo "<br>";
}
?>