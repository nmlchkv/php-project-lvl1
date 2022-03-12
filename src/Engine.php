<?php

namespace Src\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;
function startGame(string $startQuestion, array $questionsAnswers)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($startQuestion);
    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        $question = $questionsAnswers[0];
        $correctAnswer = $questionsAnswers[1];
        $roundQuestion = implode(' ', $question[$i]);
        $roundAnswer = implode(' ', $correctAnswer[$i]);
        line('Question: ' . $roundQuestion);
        $answer = prompt('Your answer');
        if ($roundAnswer == $answer) {
            line('Correct!');
        } else {
            return (line("'{$answer}' is wrong answer ;(. Correct answer was '{$roundAnswer}'.
            Let's try again, $name!"));
        }
    }
        line("Congratulations, $name!");
}
