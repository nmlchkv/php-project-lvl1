<?php

namespace Src\Games\Calc;

use function Src\Engine\Execution;
use function Cli\Line;

function runGame()
{
    $arrayRand = [];
    $result = [];
    for ($i = 0; $i <= 2; $i++) {
        $operators = ['-', '+', '*'];
        $keyOperator = rand(0, 2);
        $operator = $operators[$keyOperator];
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $result[] = [$num1 . ' ' . $operator . ' ' . $num2];
        $arrayRand[] = [getNumber($operator, $num1, $num2)];
    }
    Line('What is the result of the expression?');
    $logic = execution($result, $arrayRand);
    return $logic;
}

function getNumber(string $operator, int $num1, int $num2)
{
    switch ($operator) {
        case '+':
            return ($num1 + $num2);
        case '*':
            return ($num1 * $num2);
        case '-':
            return ($num1 - $num2);
    }
}
