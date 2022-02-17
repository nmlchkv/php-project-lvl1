<?php

namespace src\games\gcd;

use function cli\line;
use function cli\prompt;
use function src\engine;
function operacion ()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Find the greatest common divisor of given numbers.');
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    line('Question: ' . $num1 . ' ' . $num2);
    $question = prompt('Your answer');
    $num = $num1 < $num2 ? $num1 : $num2;
    function gcd($num1, $num2) {
        $num = ((($a % $b) ? gcd($b,$a % $b) : $b));
        line($num);
    }
} 
