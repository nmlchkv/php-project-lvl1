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
    $result = [];
    for($i = 0; $i <= 10; $i++) {
        if ($i % 2 === 0) {
        $result[] = $i;
    }
  }
    $str = implode(' ',$result);
    $count = count($result) - 1;
    $rand = rand(0, $count);
    $randStr = $result[$rand];
    $newStr = str_replace($randStr, '...', $str);
    line('Question: ' . $newStr);
    $question = prompt('Your answer');
}


