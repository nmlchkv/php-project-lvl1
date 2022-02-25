<?php

namespace src\games\progression;

use function cli\line;
use function cli\prompt;
use function src\engine\logic;

function operacion()
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
    $logic = logic($array, $question, $arrayRand);
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
