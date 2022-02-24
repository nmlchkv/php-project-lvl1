<?php

namespace src\games\progression;

use function cli\line;
use function cli\prompt;
use function src\engine\logic;

function operacion()
{
    $question = ('What number is missing in the progression?');
    $arrayRand = [];
    $result1 = [];
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 6 === 0) {
            $result1[] = $i;
        } if (count($result1) === 10) {
            break;
        }
    }
    $str1 = implode(' ', $result1);
    $count1 = count($result1) - 1;
    $rand1 = rand(0, $count1);
    $randStr1 = $result1[$rand1];
    $number1 = substr_replace($randStr1, '..', $str1);
    $result2 = [];
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 7 === 0) {
            $result2[] = $i;
        } if (count($result2) === 10) {
            break;
        }
    }
    $str2 = implode(' ', $result2);
    $count2 = count($result2) - 1;
    $rand2 = rand(0, $count2);
    $randStr2 = $result2[$rand2];
    $number2 = substr_replace($randStr2, '..', $str2);
    $result3 = [];
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 8 === 0) {
            $result3[] = $i;
        } if (count($result3) === 10) {
            break;
        }
    }
    $str3 = implode(' ', $result3);
    $count3 = count($result3) - 1;
    $rand3 = rand(0, $count3);
    $randStr3 = $result3[$rand3];
    $number3 = substr_replace($randStr3, '..', $str3);
    $array = [[$number1], [$number2], [$number3]];
    $arrayRand = [[$randStr1], [$randStr2], [$randStr3]];
    $logic = logic($array, $question, $arrayRand);
    return $logic;
}
