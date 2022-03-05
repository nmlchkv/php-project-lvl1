<?php

namespace Src\Games\Progression;

use function Src\Engine\execution;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION_PROGRESSION = ('What number is missing in the progression?');
function runGame()
{
    $correctAnswer = [];
    $result = [];
    $question = [];
    $startQuestion = DESCRIPTION_PROGRESSION;
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $progression = progression($result);
        $str = implode(' ', $progression);
        $randStr = array_rand($progression);
        $valueProgression = $progression[$randStr];
        $number = str_replace([$valueProgression], '..', $str);
        $question[] = [$number];
        $correctAnswer[] = [$valueProgression];
    }
    $logic = execution($question, $startQuestion, $correctAnswer);
    return $logic;
}
function progression(array $result): int
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
