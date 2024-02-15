<?php
function series_sum($n)
{
    $sum = 0;

    for ($i = 0; $i < $n; $i++) {
        $sum += 1 / (1 + $i * 3);
    }

    return number_format($sum, 2, '.', '');
}
