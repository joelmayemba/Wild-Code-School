<?php
function in_asc_order($arr)
{
    $length = count($arr);
    for ($i = 0; $i < $length - 1; $i++) {
        if ($arr[$i] >= $arr[$i + 1]) {
            return false;
        }
    }
    return true;
}
