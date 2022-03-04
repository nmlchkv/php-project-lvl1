<?php

namespace Src\Engine;

use function Cli\Line;
use function Cli\Prompt;
use const Src\Games\Progression\QUESTION;

const ROUNDS_COUNT = 2;
function execution(array $result, array $data)
{
    Line('Welcome to the Brain Games!');
    $name = Prompt('May I have your name?');
    Line("Hello, %s!", $name);
    Line(QUESTION);
    for ($i = 0; $i <= ROUNDS_COUNT; $i++) {
        $str = implode(' ', $result[$i]);
        $strRand = implode(' ', $data[$i]);
        Line('Question: ' . $str);
        $answer = Prompt('Your answer');
        if ($strRand == $answer) {
            Line('Correct!');
        } else {
            return (Line("'{$answer}' is wrong answer ;(. Correct answer was '{$strRand}'.
            Let's try again, $name!"));
        }
    }
        Line("Congratulations, $name!");
}
