<?php

namespace Src\Games\Calc;

use function Src\Engine\execution;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION_CALC = ('What is the result of the expression?');
function runGame()
{
    $correctAnswer = [];
    $question = [];
    $startQuestion = DESCRIPTION_CALC;
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $operators = ['-', '+', '*'];
        $operator = array_rand($operators);
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $question[] = [$num1 . ' ' . $operator . ' ' . $num2];
        $correctAnswer[] = [getNumber($operator, $num1, $num2)];
    }
    $logic = execution($question, $startQuestion, $correctAnswer);
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
