<?php

function findDivisors($num)
{
    $divisors = [];
    for ($i = 1; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $divisors[] = $i;
            if ($i != $num / $i) {
                $divisors[] = $num / $i;
            }
        }
    }
    return $divisors;
}
