<?php

namespace Src\Engine;

use function Cli\Line;
use function Cli\Prompt;
use function Src\Games\Calc;

function execution(array $result, string $question, array $data)
{
    Line('Welcome to the Brain Games!');
    $name = Prompt('May I have your name?');
    Line("Hello, %s!", $name);
    Calc($question);
    for ($i = 0; $i <= count($result) - 1; $i++) {
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
