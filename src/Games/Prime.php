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
    $result = 0;
    function check ($question, $rand, $result)
{
    } if (gmp_prob_prime($rand) === 2 && $question === 'yes' || gmp_prob_prime($rand) !== 2 && $question === 'no') {
        $result += 1;
        line('Correct!');
     }   if ($result !== 3) {
            $rand = rand(1, 100);
            line('Question: ' . $rand);
            $question = prompt('Your answer');
            check ($question, $rand); 
        } elseif ($result === 3) {
            return (line("Congratulations, $name!"));
    } else {
        return (line("'yes' is wrong answer ;(. Correct answer was 'no'.
    Let's try again, %s!", $name));
}
    
}
