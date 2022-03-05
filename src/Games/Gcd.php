<?php

namespace Src\Games\Gcd;

use function Src\Engine\execution;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION_GCD = ('Find the greatest common divisor of given numbers.');
function runGame()
{
    $correctAnswer = [];
    $question = [];
    $startQuestion = DESCRIPTION_GCD;
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $question[] = ["$num1 $num2"];
        $num = gcd($num1, $num2);
        $correctAnswer[] = [$num];
    }
    $questionsAnswers = [$question, $correctAnswer];
    $logic = execution($startQuestion, $questionsAnswers);
    return $logic;
}

function gcd(int $num1, int $num2): int
{
    if ($num2 > 0) {
        return gcd($num2, $num1 % $num2);
    } else {
        return abs($num1);
    }
}
