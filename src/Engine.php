<<<<<<< HEAD
<?php

namespace Src\Engine;

use function Cli\Line;
use function Cli\Prompt;

function execution($array, $question, $arrayRand)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($question);
    for ($i = 0; $i <= count($array) - 1; $i++) {
        $str = implode(' ', $array[$i]);
        $strRand = implode(' ', $arrayRand[$i]);
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
=======
<?php

namespace Src\Engine;

use function Cli\Line;
use function Cli\Prompt;

function execution($array, $question, $arrayRand)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($question);
    for ($i = 0; $i <= count($array) - 1; $i++) {
        $str = implode(' ', $array[$i]);
        $strRand = implode(' ', $arrayRand[$i]);
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
>>>>>>> 763a7c72ccc39c341f55cf0539a97f129a5ec83f
