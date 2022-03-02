<?php

namespace Src\Games\Gcd;

use function Src\Engine\Execution;

function calculation()
{
    $question = ('Find the greatest common divisor of given numbers.');
    $data = [];
    $array = [];
    for ($i = 0; $i <= 2; $i++) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $array[] = ["$num1 $num2"];
        $num = gcd($num1, $num2);
        $data[] = [$num];
    }
    $logic = execution($array, $question, $data);
    return $logic;
}

function gcd(int $num1, int $num2)
{
    if ($num2 > 0) {
        return gcd($num2, $num1 % $num2);
    } else {
        return abs($num1);
    }
}
