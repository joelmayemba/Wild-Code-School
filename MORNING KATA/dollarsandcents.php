<?php

function format_money(float $amount): string
{
    return '$' . number_format($amount, 2, '.', '');
}
