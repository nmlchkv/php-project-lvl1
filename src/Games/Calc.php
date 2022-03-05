<?php

namespace Src\Games\Calc;

use function Src\Engine\execution;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION_CALC = ('What is the result of the expression?');
function runGame()
{
    $data = [];
    $result = [];
    $question = DESCRIPTION_CALC;
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $operators = ['-', '+', '*'];
        $keyOperator = rand(0, 2);
        $operator = $operators[$keyOperator];
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $result[] = [$num1 . ' ' . $operator . ' ' . $num2];
        $data[] = [getNumber($operator, $num1, $num2)];
    }
    $logic = execution($result, $question, $data);
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
