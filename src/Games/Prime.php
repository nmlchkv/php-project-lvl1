<?php

namespace src\games\prime;

use function cli\line;
use function cli\prompt;

function operacion()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $rand = rand(1, 100);
    line('Question: ' . $rand);
    $question = prompt('Your answer');
    line(answer($question));
    line(answer($question));
}
function answer ($question)
{
    if (gmp_prob_prime($rand) === 2 && $question === 'yes') {
        return line('Correct!');
    } if (gmp_prob_prime($rand) !== 2 && $question === 'no') {
        return line('Correct!');
    } else {
        return line("'yes' is wrong answer ;(. Correct answer was 'no'.
    Let's try again, %s!", $name);
    }
}