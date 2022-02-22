<?php

namespace src\games\progression;

use function cli\line;
use function cli\prompt;
use function src\engine\logic;

function operacion()
{
    $question = ('What number is missing in the progression?');
    $result = [];
    for ($i = 0; $i <= 40; $i++) {
        if ($i % 4 === 0) {
            $result[] = $i;
        }
    }
    $str = implode(' ', $result);
    $count = count($result) - 1;
    $rand = rand(0, $count);
    $randStr = $result[$rand];
    $number = str_replace($randStr, '...', $str);
    return  (($number, $question));
      
}
logic($number, $question);