<?php
function boolToWord($bool)
{
    if ($bool == true) {
        $bool = "Yes";
    } else {
        $bool = "No";
    }
    return $bool;
}