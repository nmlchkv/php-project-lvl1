<?php

namespace Src\Games\Gcd;

use function Src\Engine\startGame;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION = ('Find the greatest common divisor of given numbers.');
function runGame()
{
    $correctAnswer = [];
    $question = [];
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $question[] = "$num1 $num2";
        $num = toCheckDivider($num1, $num2);
        $correctAnswer[] = $num;
    }
    $dataRounds = [$question, $correctAnswer];
    return (startGame(DESCRIPTION, $dataRounds));
}

function toCheckDivider(int $num1, int $num2): int
{
    if ($num2 > 0) {
        return toCheckDivider($num2, $num1 % $num2);
    } else {
        return abs($num1);
    }
}
