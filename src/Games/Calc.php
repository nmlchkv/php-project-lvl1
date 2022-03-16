<?php

namespace Src\Games\Calc;

use function Src\Engine\startGame;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION = ('What is the result of the expression?');
function runGame()
{
    $correctAnswer = [];
    $question = [];
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $operators = ['-', '+', '*'];
        $keyOperator = array_rand($operators);
        $operator = $operators[$keyOperator];
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $question[] = ("{$num1} {$operator} {$num2}");
        $correctAnswer[] = calculate($operator, $num1, $num2);
    }
    $questionsAnswers = [$question, $correctAnswer];
    return (startGame(DESCRIPTION, $questionsAnswers));
}

function calculate(string $operator, int $num1, int $num2): int
{
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
