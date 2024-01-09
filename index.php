<?php

function square(int|float $radius): int|float
{
    return pi() * $radius ** 2;
}
;

var_dump(square(2));
var_dump(square(7));


$number = 5;
function customPow(int|float $number)
{
    return $number *= $number;
}
;

function customPow2(int|float &$number)
{
    return $number *= $number;
}

var_dump(customPow($number));
var_dump($number);
var_dump(customPow2($number));
var_dump($number);

