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
        $rand = rand(2, 3);
        if ($i % $rand === 0) {
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
    if ($question == $randStr) {
        line('Correct!');
        $result = [];
        for($i = 0; $i <= 10; $i++) {
            $rand = rand(2, 3);
            if ($i % $rand === 0) {
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
    } if ($question == $randStr) {
        line('Correct!');
        $result = [];
        for($i = 0; $i <= 10; $i++) {
            $rand = rand(2, 3);
            if ($i % $rand === 0) {
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
    } if ($question == $randStr) {
        line("Congratulations, $name!");
    } else {
        line("'{$question}' is wrong answer ;(. Correct answer was '{$randStr}'.
        Let's try again, $name!");
    }
}


