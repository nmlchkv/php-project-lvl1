<?php

namespace Src\Games\Even;

use function Src\Engine\Execution;

function calculation()
{
    $question = ('Answer "yes" if the number is even, otherwise answer "no".');
    $data = [];
    $array = [];
    for ($i = 0; $i <= 2; $i++) {
        $num = rand(1, 15);
        $array[] = [$num];
        if ($num % 2 === 0) {
            $data[] = ['yes'];
        } else {
            $data[] = ['no'];
        }
    }
    $logic = execution($array, $question, $data);
    return $logic;
}
