<?php

namespace Src\Games\Even;

use function Src\Engine\execution;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION_EVEN = ('Answer "yes" if the number is even, otherwise answer "no".');
function runGame()
{
    $data = [];
    $result = [];
    $question = DESCRIPTION_EVEN ;
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $num = rand(1, 15);
        $result[] = [$num];
        if ($num % 2 === 0) {
            $data[] = ['yes'];
        } else {
            $data[] = ['no'];
        }
    }
    $logic = execution($result, $question, $data);
    return $logic;
}
