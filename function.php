<?php


// create a function to sum two number

// Create sum of two functions

function addition($num1, $num2)
{
    echo  $num1 + $num2;
}
addition(10, 20);

// Create function to sum all numbers using ...$nums


function sum(...$numbers)
{

    $sum = 0;
    foreach ($numbers as $num)
        $sum = $sum + $num;

    return $sum;
}

echo sum(1, 3, 4, 5, 6);
