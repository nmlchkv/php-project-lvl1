<?php

namespace Src\Games\Calc;

use function Src\Engine\Execution;

function runGame()
{
    $question = ('What is the result of the expression?');
    $arrayRand = [];
    $array = [];
    for ($i = 0; $i <= 2; $i++) {
        $arrayOperator = ['-', '+', '*'];
        $keyOperator = rand(0, 2);
        $operator = $arrayOperator[$keyOperator];
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $array[] = [$num1 . ' ' . $operator . ' ' . $num2];
        $arrayRand[] = [getNumber($operator, $num1, $num2)];
    }
    $logic = execution($array, $question, $arrayRand);
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
