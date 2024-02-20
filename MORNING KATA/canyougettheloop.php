<?php
function loop_size(Node $node): int {
    // Initialize slow and fast pointers
    $slow = $node;
    $fast = $node;

    // Move slow and fast pointers until they meet
    do {
        $slow = $slow->getNext();
        $fast = $fast->getNext()->getNext();
    } while ($slow !== $fast);

    // Move slow pointer to the beginning of the loop
    $slow = $node;
    while ($slow !== $fast) {
        $slow = $slow->getNext();
        $fast = $fast->getNext();
    }

    // Count nodes in the loop
    $length = 1;
    $fast = $fast->getNext();
    while ($slow !== $fast) {
        $fast = $fast->getNext();
        $length++;
    }

    return $length;
}
