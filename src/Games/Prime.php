<?php

namespace Src\Games\Prime;

use function Src\Engine\startGame;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION = ('Answer "yes" if given number is prime. Otherwise answer "no".');
function runGame()
{
    $correctAnswer = [];
    $question = [];
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $num = rand(1, 100);
        $question[] = $num;
        $correctAnswer[] = isPrime($num) ? 'yes' : 'no';
    }
    $dataRounds = [$question, $correctAnswer];
    return (startGame(DESCRIPTION, $dataRounds));
}

function isPrime(int $num): bool
{
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
