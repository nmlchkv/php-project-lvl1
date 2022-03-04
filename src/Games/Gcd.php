<?php

namespace Src\Games\Gcd;

use function Src\Engine\execution;

use const Src\Engine\ROUNDS_COUNT;

const QUESTION = ('Find the greatest common divisor of given numbers.');
function runGame()
{
    $data = [];
    $result = [];
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $result[] = ["$num1 $num2"];
        $num = gcd($num1, $num2);
        $data[] = [$num];
    }
    $logic = execution($result, $data);
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
