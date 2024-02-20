<?php

function fuel_price($litres, $price_per_litre)
{
    $discount = min(floor($litres / 2) * 5, 25); // Calculate the discount
    $final_price_per_litre = $price_per_litre - ($discount / 100); // Calculate the final price per litre
    $total_cost = $litres * $final_price_per_litre; // Calculate the total cost
    return round($total_cost, 2); // Round to 2 decimal places and return
}
