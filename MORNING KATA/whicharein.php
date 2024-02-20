<?php

function inArray($array1, $array2)
{
    $result = []; // Initialize result array

    // Iterate through each string in a1
    foreach ($array1 as $str1) {
        // Iterate through each string in a2
        foreach ($array2 as $str2) {
            // Check if str1 is a substring of str2
            if (strpos($str2, $str1) !== false) {
                // Add str1 to result array and break the inner loop
                $result[] = $str1;
                break;
            }
        }
    }

    // Sort the result array in lexicographical order
    sort($result);

    return $result;
}
