<?php

namespace Src\Games\Prime;

use function Src\Engine\execution;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION_PRIME = ('Answer "yes" if given number is prime. Otherwise answer "no".');
function runGame()
{
    $correctAnswer = [];
    $question = [];
    $startQuestion = DESCRIPTION_PRIME;
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $num = rand(1, 100);
        $question[] = [$num];
        if (is_prime($num) === true) {
            $correctAnswer[] = ['yes'];
        } else {
            $correctAnswer[] = ['no'];
        }
    }
    $logic = execution($question, $startQuestion, $correctAnswer);
    return $logic;
}
function is_prime(int $num): bool
{
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
// test
