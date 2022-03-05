<?php

namespace Src\Games\Prime;

use function Src\Engine\execution;

use const Src\Engine\ROUNDS_COUNT;

const DESCRIPTION_CALC = ('Answer "yes" if given number is prime. Otherwise answer "no".');
function runGame()
{
    $data = [];
    $result = [];
    $question = DESCRIPTION_CALC;
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $num = rand(1, 100);
        $result[] = [$num];
        if (is_prime($num) === true) {
            $data[] = ['yes'];
        } else {
            $data[] = ['no'];
        }
    }
    $logic = execution($result, $question, $data);
    return $logic;
}
function is_prime(int $num)
{
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
// test
