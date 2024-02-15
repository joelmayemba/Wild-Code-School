<?php

function orderWeight($str)
{
    $nums = explode(" ", $str);

    usort($nums, function ($a, $b) {
        $weightA = calculateWeight($a);
        $weightB = calculateWeight($b);

        if ($weightA == $weightB) {
            return strcmp($a, $b);
        }

        return $weightA - $weightB;
    });

    return implode(' ', $nums);
}

function calculateWeight($num)
{
    $digits = str_split($num);
    return array_sum($digits);
}
