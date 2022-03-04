<?php

namespace Src\Games\Even;

use function Src\Engine\execution;

function runGame()
{
    $question = ('Answer "yes" if the number is even, otherwise answer "no".');
    $data = [];
    $result = [];
    for ($i = 0; $i <= 2; $i++) {
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
