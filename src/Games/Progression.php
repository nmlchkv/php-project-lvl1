<?php

namespace Src\Games\Progression;

use function Src\Engine\Execution;

function runGame()
{
    $question = ('What number is missing in the progression?');
    $data = [];
    $result = [];
    $arr = [];
    for ($i = 0; $i <= 2; $i++) {
        $progression = progression($result);
        $str = implode(' ', $progression);
        $count = count($progression) - 1;
        $index = rand(0, $count);
        $randStr = $progression[$index];
        $number = str_replace([$randStr], '..', $str);
        $arr[] = [$number];
        $data[] = [$randStr];
    }
    $logic = execution($array, $question, $data);
    return $logic;
}
function progression(array $result)
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
