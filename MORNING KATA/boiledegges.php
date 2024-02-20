<?php
function cooking_time(int $eggs): int
{
    $full_batches = floor($eggs / 8); // Calculate full batches
    $remaining_eggs = $eggs % 8; // Calculate remaining eggs after full batches

    $time = $full_batches * 5; // Calculate time for full batches

    if ($remaining_eggs > 0) {
        $time += 5; // Add 5 minutes for boiling the remaining eggs
    }

    return $time;
}
