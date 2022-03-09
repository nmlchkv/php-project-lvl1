<?php

namespace Src\Games\Prime;

use function Src\Engine\startGame;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION = ('Answer "yes" if given number is prime. Otherwise answer "no".');
function runGame()
{
    $correctAnswer = [];
    $question = [];
    $startQuestion = DESCRIPTION;
    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $num = rand(1, 100);
        $question[] = [$num];
        if (is_prime($num) === true) {
            $correctAnswer[] = ['yes'];
        } else {
            $correctAnswer[] = ['no'];
        }
    }
    $questionsAnswers = [$question, $correctAnswer];
    $logic = startGame($startQuestion, $questionsAnswers);
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
