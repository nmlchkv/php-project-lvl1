<?php

namespace Src\Games\Prime;

use function Src\Engine\Execution;

function calculation()
{
    $question = ('Answer "yes" if given number is prime. Otherwise answer "no".');
    $arrayRand = [];
    $array = [];
    for ($i = 0; $i <= 2; $i++) {
        $num = rand(1, 100);
        $array[] = [$num];
        if (is_prime($num) === true) {
            $arrayRand[] = ['yes'];
        } else {
            $arrayRand[] = ['no'];
        }
    }
    $logic = execution($array, $question, $arrayRand);
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
