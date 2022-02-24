<?php

namespace src\games\prime;

use function cli\line;
use function cli\prompt;
use function src\engine\logic;

function operacion()
{
    $question = ('Answer "yes" if given number is prime. Otherwise answer "no".');
    $arrayRand = [];
    $array = [];
    for ($i = 0; $i <= 2; $i++) {
        $num = rand(1, 100);
        $array[] = [$num];
        if ($num / $num && $num / 1) {
            $arrayRand[] = ['yes'];
        } else {
            $arrayRand[] = ['no'];
        }
    }
    $logic = logic($array, $question, $arrayRand);
    return $logic;
}
