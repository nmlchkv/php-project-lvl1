<?php

namespace src\games\gcd;

use function cli\line;
use function cli\prompt;
use function src\engine\logic;

function operacion()
{
    $question = ('Find the greatest common divisor of given numbers.');
    $arrayRand = [];
    $array = [];
    for ($i = 0; $i <= 2; $i++) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $array[] = ["$num1 $num2"];
        $num = gcd($num1, $num2);
        $arrayRand[] = [$num];
    }
}
function gcd($num1, $num2)
{
    $num = ((($num1 % $num2) ? gcd($num2, $num1 % $num2) : $num2));
    return $num;
}
