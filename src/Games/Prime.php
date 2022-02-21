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
    if (gmp_prob_prime($rand) === 2 && $question === 'yes' || gmp_prob_prime($rand) !== 2 && $question === 'no') {
        line('Correct!');
        $rand = rand(1, 100);
        line('Question: ' . $rand);
        $question = prompt('Your answer');
    } if (gmp_prob_prime($rand) === 2 && $question === 'yes' || gmp_prob_prime($rand) !== 2 && $question === 'no') {
            line('Correct!');
            $rand = rand(1, 100);
            line('Question: ' . $rand);
            $question = prompt('Your answer');
    } if (gmp_prob_prime($rand) === 2 && $question === 'yes' || gmp_prob_prime($rand) !== 2 && $question === 'no') {
            line("Congratulations, $name!");
    } else {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.
        Let's try again, %s!", $name);
    }
}
