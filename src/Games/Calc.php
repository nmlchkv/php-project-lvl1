<?php

namespace src\games\calc;

use function cli\line;
use function cli\prompt;
use function src\engine\logic;

function operacion()
{
    $question = ('What is the result of the expression?');
    $arrayRand = [];
    $array = [];
    for ($i = 0; $i <= 2; $i++) {
        $arrayOperator = ['-', '+', '*'];
        $keyOperator = rand(0, 2);
        $operator = $arrayOperator[$keyOperator];
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $array[] = [$num1 . ' ' . $operator . ' ' . $num2];
        $arrayRand[] = [operator($operator, $num1, $num2)];
    }
    $logic = logic($array, $question, $arrayRand);
    return $logic;
}

function operator($operator, $num1, $num2)
{
    switch ($operator) {
        case '+':
            $answer =  $num1 + $num2;
            break;
        case '*':
            $answer = $num1 * $num2;
            break;
        case '-':
            $answer = $num1 - $num2;
            break;
    }
        return $answer;
}
