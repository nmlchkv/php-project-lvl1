<?php

namespace src\games\progression;

use function cli\line;
use function cli\prompt;

function operacion ()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What number is missing in the progression?');
    $num1 = rand(1, 10);
    $num2 = rand(1, 3);
    line('Question: ' . $num1 + $num2 . ' ' . $num1 + $num2 + 1 . ' ' . $num1 + $num2 + 3 . ' ' . $num1 + $num2 + 5);
    $question = prompt('Your answer');
}


