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
    $result = '';
    for($i = 1; $i > $num1; $i++) {
        $result = $i + $num2;
    }
}


