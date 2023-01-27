<?php

namespace Src\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;
function startGame(string $startQuestion, array $dataRounds)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($startQuestion);
    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $question = $dataRounds[0];
        $correctAnswer = $dataRounds[1];
        line('Question: ' . $question[$i]);
        $answer = prompt('Your answer');
        if ($correctAnswer[$i] == $answer) {
            line('Correct!');
        } else {
            (line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer[$i]}'.
            Let's try again, $name!"));
            return;
        }
    }
        line("Congratulations, $name!!");
}
