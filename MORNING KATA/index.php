<?php

// Remove First and Last Character
function remove_char(string $s): string
{
    return substr($s, 1, -1);
}

// Vowel Count
function getCount($str)
{
    $vowelsCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    for ($i = 0; $i < strlen($str); $i++) {
        $char = strtolower($str[$i]);

        if (in_array($char, $vowels)) {
            $vowelsCount++;
        }
    }
    return $vowelsCount;
}


// Get the Middle Character
function getMiddle($text)
{
    $len = strlen($text);
    $half = $len / 2;
    return ($len % 2 == 0) ? substr($text, (floor($half) - 1), 2) : substr($text, $half, 1);
}

//Jaden Casing Strings
function toJadenCase(string $string): string
{
    return ucwords(strtolower($string));
}

// Mumbling
function accum($s)
{
    $parts = [];

    foreach (str_split($s) as $index => $part) {
        $parts[] = strtoupper($part) . str_repeat(strtolower($part), $index);
    }

    return implode('-', $parts);
}

// Find the odd int
function findIt(array $seq): int
{
    $counts = array_count_values($seq);

    foreach ($counts as $num => $count) {
        if ($count % 2 !== 0) {
            return $num;
        }
    }
}

// Duplicate Encoder
function duplicate_encode($word)
{
    $word = strtolower($word);
    $result = '';
    for ($i = 0; $i < strlen($word); $i++) {
        $char = $word[$i];
        $count = substr_count($word, $char);
        if ($count == 1) {
            $result .= '(';
        } else {
            $result .= ')';
        }
    }
    return $result;
}

// Convert string to camel case
function toCamelCase($str)
{
    return implode('', array_map(function ($word, $key) {
        return ($key === 0) ? $word : ucfirst($word);
    }, preg_split('/[-_]/', $str), array_keys(preg_split('/[-_]/', $str))));
}

// Count the smiley faces!
function count_smileys($arr): int
{
    return count(array_filter($arr, function ($face) {
        return preg_match('/^[:;][-~]?[)D]$/', $face);
    }));
}

// Are they the "same"?
function comp($a1, $a2)
{
    if ($a1 === null || $a2 === null) {
        return false;
    }

    $squaredA1 = array_map(function ($num) {
        return $num * $num;
    }, $a1);

    sort($squaredA1);
    sort($a2);

    return $squaredA1 === $a2;
}

// Consecutive strings
function longestConsec($strarr, $k)
{
    $n = count($strarr);

    if ($n === 0 || $k > $n || $k <= 0) {
        return "";
    }

    $maxLength = 0;
    $result = "";

    for ($i = 0; $i <= $n - $k; $i++) {
        $currentConcatenation = implode('', array_slice($strarr, $i, $k));
        $currentLength = strlen($currentConcatenation);

        if ($currentLength > $maxLength) {
            $maxLength = $currentLength;
            $result = $currentConcatenation;
        }
    }

    return $result;
}

// Build a pile of Cubes
function findNb($m)
{
    $n = 1;
    $volume = 0;

    while ($volume < $m) {
        $volume += pow($n, 3);
        if ($volume == $m) {
            return $n;
        }
        $n++;
    }

    return -1;
}

// Directions Reduction
function dirReduc($arr)
{
    $oppositeMap = [
        "NORTH" => "SOUTH",
        "SOUTH" => "NORTH",
        "EAST" => "WEST",
        "WEST" => "EAST"
    ];

    $stack = [];

    foreach ($arr as $direction) {
        if (!empty($stack) && $stack[count($stack) - 1] === $oppositeMap[$direction]) {
            array_pop($stack);
        } else {
            $stack[] = $direction;
        }
    }

    return $stack;
}

// Integers: Recreation One
function listSquared($m, $n)
{
    $result = [];

    for ($num = $m; $num <= $n; $num++) {
        $divisors = findDivisors($num);
        $sumOfSquares = array_sum(array_map(function ($divisor) {
            return $divisor * $divisor;
        }, $divisors));

        if (isPerfectSquare($sumOfSquares)) {
            $result[] = [$num, $sumOfSquares];
        }
    }

    return $result;
}



function isPerfectSquare($num)
{
    $root = sqrt($num);
    return $root == intval($root);
}

// Tortoise racing
function race($v1, $v2, $g)
{
    if ($v1 >= $v2) {
        return null;
    }

    $time_to_catch_lead = $g / ($v2 - $v1);

    $hours = floor($time_to_catch_lead);
    $minutes = floor(($time_to_catch_lead * 60) % 60);
    $seconds = floor(($time_to_catch_lead * 3600) % 60);

    return [$hours, $minutes, $seconds];
}

// Basic Mathematical Operations
function basicOp($op, $val1, $val2)
{
    switch ($op) {
        case "+":
            return $val1 + $val2;
        case "-":
            return $val1 - $val2;
        case "*":
            return $val1 * $val2;
        default:
            return $val1 / $val2;
    }
}
return basicOp("+", 5, 2);


function format_money(float $amount): string
{
    return floatval($amount);
}


// Invert values
function invert(array $a): array
{
    return array_map(function ($num) {
        return -$num;
    }, $a);
}

