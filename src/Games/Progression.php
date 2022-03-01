<?php

namespace Src\Games\Progression;

use function Src\Engine\Execution;

function Calculation()
{
    $question = ('What number is missing in the progression?');
    $arrayRand = [];
    $array = [];
    $result = [];
    for ($i = 0; $i <= 2; $i++) {
        $arr = progression($result);
        $str = implode(' ', $arr);
        $count = count($arr) - 1;
        $index = rand(0, $count);
        $randStr = $arr[$index];
        $number = str_replace([$randStr], '..', $str);
        $array[] = [$number];
        $arrayRand[] = [$randStr];
    }
    $logic = Execution($array, $question, $arrayRand);
    return $logic;
}
function progression(array $result1)
{
    $randNumber = rand(100, 200);
    $randDiv = rand(6, 8);
    for ($i = 0; $i <= $randNumber; $i++) {
        if ($i % $randDiv === 0) {
            $result1[] = $i;
        } if (count($result1) === 10) {
            return $result1;
        }
    }
}
