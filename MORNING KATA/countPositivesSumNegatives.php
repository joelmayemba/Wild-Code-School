<?php
function countPositivesSumNegatives($input)
{
    if (empty($input)) {
        return [];
    }

    $countPositives = 0;
    $sumNegatives = 0;

    foreach ($input as $num) {
        if ($num > 0) {
            $countPositives++;
        } elseif ($num < 0) {
            $sumNegatives += $num;
        }
    }

    return [$countPositives, $sumNegatives];
}
