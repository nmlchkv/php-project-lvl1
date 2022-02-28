<?php

namespace Src\Games\Even;

use function Cli\Line;
use function Cli\Prompt;
use function Src\Engine\Execution;

function calculation()
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
    $logic = execution($array, $question, $arrayRand);
    return $logic;
}
