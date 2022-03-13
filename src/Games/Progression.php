<?php

namespace Src\Games\Progression;

use function Src\Engine\startGame;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION = ('What number is missing in the progression?');
function runGame()
{
    $correctAnswer = [];
    $question = [];
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $progression = makeProgression();
        $str = implode(' ', $progression);
        $randStr = array_rand($progression);
        $valueProgression = $progression[$randStr];
        $number = str_replace([$valueProgression], '..', $str);
        $question[] = [$number];
        $correctAnswer[] = [$valueProgression];
    }
    $questionsAnswers = [$question, $correctAnswer];
    return (startGame(DESCRIPTION, $questionsAnswers));
}

function makeProgression(): array
{
    $result = [];
    $randNumber = rand(2, 4);
    for ($i = 0; $i <= 20; $i += $randNumber) {
        $result[] = $i;
    }
    return $result;
}
