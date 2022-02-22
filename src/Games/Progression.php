<?php

namespace src\games\progression;

use function cli\line;
use function cli\prompt;
use function src\engine\logic;

function operacion()
{
    $question = ('What number is missing in the progression?');
    $result = [];
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 6 === 0) {
            $result[] = $i;
        }
    }
    $str = implode(' ', $result);
    $count = count($result) - 1;
    $rand = rand(0, $count);
    $randStr = $result[$rand];
    $number1 = str_replace($randStr, '...', $str);
    $result = [];
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 7 === 0) {
            $result[] = $i;
        }
    }
    $str = implode(' ', $result);
    $count = count($result) - 1;
    $rand = rand(0, $count);
    $randStr = $result[$rand];
    $number2 = str_replace($randStr, '...', $str);
    $result = [];
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 8 === 0) {
            $result[] = $i;
        }
    }
    $str = implode(' ', $result);
    $count = count($result) - 1;
    $rand = rand(0, $count);
    $randStr = $result[$rand];
    $number3 = str_replace($randStr, '...', $str);
    $array = [$number1], [$number2], [$number3]];
    return  logic($array, $question);
      
}
