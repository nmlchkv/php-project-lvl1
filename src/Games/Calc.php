<?php

namespace Src\Games\Calc;

use function Src\Engine\execution;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION_CALC = ('What is the result of the expression?');
const OPERATORS = ['-', '+', '*'];
function runGame()
{
    $correctAnswer = [];
    $question = [];
    $startQuestion = DESCRIPTION_CALC;
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $question[] = [$num1 . ' ' . OPERATORS . ' ' . $num2];
        $correctAnswer[] = [calculate($num1, $num2)];
    }
    $logic = execution($question, $startQuestion, $correctAnswer);
    return $logic;
}

function calculate(int $num1, int $num2)
{
    $operator = array_rand(OPERATORS);
    switch ($operator) {
        case '+':
            return ($num1 + $num2);
        case '*':
            return ($num1 * $num2);
        case '-':
            return ($num1 - $num2);
        default:
            return null;
    }
}
