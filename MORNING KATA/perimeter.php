<?php
function perimeter($n) {
    return 4 * fib($n + 2);
}

function fib($n) {
    $a = 0;
    $b = 1;

    for ($i = 0; $i < $n; $i++) {
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

    return $a;
}
