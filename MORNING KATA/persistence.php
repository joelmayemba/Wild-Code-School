<?php
function persistence(int $num): int
{
    $count = 0;

    while ($num >= 10) {
        $digits = str_split((string)$num);
        $product = 1;

        foreach ($digits as $digit) {
            $product *= $digit;
        }

        $num = $product;
        $count++;
    }

    return $count;
}
