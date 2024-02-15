<?php
function solution(string $s): int
{
    $maxSequence = 0;

    for ($i = 0; $i <= strlen($s) - 5; $i++) {
        $currentSequence = substr($s, $i, 5);
        $maxSequence = max($maxSequence, (int)$currentSequence);
    }

    return $maxSequence;
}
