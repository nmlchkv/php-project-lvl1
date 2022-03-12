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
        $progression = otProgression($result);
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

function toPogression(array $result)
{
    $randNumber = rand(100, 200);
    $randDiv = rand(6, 8);
    for ($i = 0; $i <= $randNumber; $i++) {
        if ($i % $randDiv === 0) {
            $result[] = $i;
        } if (count($result) === 10) {
            return $result;
        }
    }
}
