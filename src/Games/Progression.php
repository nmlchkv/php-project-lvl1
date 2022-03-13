<?php

namespace Src\Games\Progression;

use function Src\Engine\startGame;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION = ('What number is missing in the progression?');
function runGame()
{
    $correctAnswer = [];
    $result = [];
    $question = [];
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $progression = toProgress($result);
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

function toProgress(array $result)
{
    $randNumber = rand(100, 200);
    $randDiv = rand(6, 8);
    for ($i = 0; $i <= $randNumber; $i++) {
        if ($i + ($randNumber - $randDiv) * $i) {
            $result[] = $i;
        }
    }
    return $result;
}
