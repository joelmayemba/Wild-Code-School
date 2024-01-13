<?php

// // Even or Odd
// function even_or_odd($n)
// {
//     if ($n % 2 == 0) {
//         return "Even";
//     } else {
//         return "Odd";
//     }
// }

// // Opposite number
// function opposite($n)
// {
//     return -$n;
// }

// // String repeat
// function repeatStr($n, $str)
// {
//     return str_repeat($str, $n);
// }

// // Jenny's secret message
// function greet($name)
// {
//     if ($name === 'Johnny') {
//         return 'Hello, my love!';
//     } else {
//         return "Hello, $name!";
//     }
// }

// // Convert boolean values to strings 'Yes' or 'No'.
// function boolToWord($bool)
// {
//     if ($bool == true) {
//         $bool = "Yes";
//     } else {
//         $bool = "No";
//     }
//     return $bool;
// }

// // Remove First and Last Character
// function remove_char(string $s): string
// {

//     return substr($s, 1, -1);
// }

// function getCount($str)
// {
//     $vowelsCount = 0;

//     // enter your magic here

//     return $vowelsCount;
// }

// Get the Middle Character
function getMiddle($text)
{
    $len = strlen($text);
    $half = $len / 2;
    return ($len % 2 == 0) ? substr($text, (floor($half) - 1), 2) : substr($text, $half, 1);
}
