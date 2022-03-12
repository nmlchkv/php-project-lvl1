<?php

namespace Src\Games\Even;

use function Src\Engine\startGame;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION = ('Answer "yes" if the number is even, otherwise answer "no".');
function runGame()
{
    $correctAnswer = [];
    $question = [];
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $num = rand(1, 15);
        $question[] = [$num];
        if ($num % 2 === 0) {
            $correctAnswer[] = ['yes'];
        } else {
            $correctAnswer[] = ['no'];
        }
    }
    $questionsAnswers = [$question, $correctAnswer];
    $logic = startGame(DESCRIPTION, $questionsAnswers);
    return $logic;
}
