<?php

namespace Src\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 2;
function execution(array $question, string $startQuestion, array $correctAnswer): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($startQuestion);
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $str = implode(' ', $question[$i]);
        $strRand = implode(' ', $correctAnswer[$i]);
        line('Question: ' . $str);
        $answer = prompt('Your answer');
        if ($strRand == $answer) {
            line('Correct!');
        } else {
            return (line("'{$answer}' is wrong answer ;(. Correct answer was '{$strRand}'.
            Let's try again, $name!"));
        }
    }
        line("Congratulations, $name!");
}
