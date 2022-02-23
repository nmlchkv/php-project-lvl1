<?php

namespace src\games\even;

use function cli\line;
use function cli\prompt;
use function src\engine\logic;

function operacion()
{
    $question = ('Answer "yes" if the number is even, otherwise answer "no".');
    $arrayRand = [];
    $array = [];
    for ($i = 0; $i <= 2; $i++) {
        $num = rand(1, 15);
        $array[] = [$num];
        if ($num % 2 === 0) {
            $arrayRand[] = ['yes'];
        } else {
            $arrayRand[] = ['no'];
        }
    }
    $logic = logic($array, $question, $arrayRand);
    return $logic;
}
