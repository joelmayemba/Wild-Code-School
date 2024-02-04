<?php

// Even or Odd
function even_or_odd($n)
{
    if ($n % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

// Opposite number
function opposite($n)
{
    return -$n;
}

// String repeat
function repeatStr($n, $str)
{
    return str_repeat($str, $n);
}

// Jenny's secret message
function greet($name)
{
    if ($name === 'Johnny') {
        return 'Hello, my love!';
    } else {
        return "Hello, $name!";
    }
}

// Convert boolean values to strings 'Yes' or 'No'.
function boolToWord($bool)
{
    if ($bool == true) {
        $bool = "Yes";
    } else {
        $bool = "No";
    }
    return $bool;
}

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
