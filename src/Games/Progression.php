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
        $numbers = implode(' ', $progression);
        $randProgression = array_rand($progression);
        $valueRand = $progression[$randProgression];
        $numberProgression = str_replace([$valueRand], '..', $numbers);
        $question[] = $numberProgression;
        $correctAnswer[] = $valueRand;
    }
    $dataRounds = [$question, $correctAnswer];
    return (startGame(DESCRIPTION, $dataRounds));
}

function makeProgression(): array
{
    $result = [];
    $randNumber = rand(2, 4);
    for ($i = 0; $i < 20; $i += $randNumber) {
        $result[] = $i;
    }
    return $result;
}
