<?php

namespace Src\Games\Gcd;

use function Src\Engine\Execution;

function Calculation()
{
    $question = ('Find the greatest common divisor of given numbers.');
    $arrayRand = [];
    $array = [];
    for ($i = 0; $i <= 2; $i++) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $array[] = ["$num1 $num2"];
        $num = gcd($num1, $num2);
        $arrayRand[] = [$num];
    }
    $logic = Execution($array, $question, $arrayRand);
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
