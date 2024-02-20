<?php

function sqInRect($lng, $wdth)
{
    // Check if the rectangle is already a square
    if ($lng == $wdth) {
        return null;
    }

    $squares = []; // Array to store the sizes of squares

    // Continue dividing the rectangle into squares until it becomes a square
    while ($lng != $wdth) {
        // Find the side length of the largest square that fits into the rectangle
        $side = min($lng, $wdth);

        // Add the side length to the array of square sizes
        $squares[] = $side;

        // Update the dimensions of the rectangle
        if ($lng > $wdth) {
            $lng -= $side;
        } else {
            $wdth -= $side;
        }
    }

    // Add the final square (the square that makes the rectangle a square)
    $squares[] = $lng; // or $wdth, since $lng == $wdth

    return $squares;
}
