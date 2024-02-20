<?php
function removeNb($n)
{
    // Calculate the sum of all numbers from 1 to n
    $totalSum = ($n * ($n + 1)) / 2;
    $result = [];

    // Iterate through all possible pairs of numbers (a, b)
    for ($a = 1; $a <= $n; $a++) {
        for ($b = $a + 1; $b <= $n; $b++) {
            // Calculate the sum of all numbers from 1 to n, excluding a and b
            $sumWithoutAB = $totalSum - $a - $b;

            // Check if removing a and b satisfies the condition
            if ($a * $b === $sumWithoutAB) {
                // Add the pair (a, b) to the result array
                $result[] = [$a, $b];
                // Since (b, a) would also be a valid pair, add it as well
                $result[] = [$b, $a];
            }
        }
    }

    return $result;
}
