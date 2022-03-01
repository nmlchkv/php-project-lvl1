<?php

namespace Src\Engine;

use function Cli\Line;
use function Cli\Prompt;

function execution(array $array, string $question, array $arrayRand)
{
    Line('Welcome to the Brain Games!');
    $name = Prompt('May I have your name?');
    Line("Hello, %s!", $name);
    Line($question);
    for ($i = 0; $i <= count($array) - 1; $i++) {
        $str = implode(' ', $array[$i]);
        $strRand = implode(' ', $arrayRand[$i]);
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
