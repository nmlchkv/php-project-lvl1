<?php

namespace src\games\even;

use function cli\line;
use function cli\prompt;
use function src\engine;

line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
line('Answer "yes" if the number is even, otherwise answer "no".');
        $num = rand(1, 15);
        line('Question: ' . $num);
        $question = prompt('Your answer');
if ($num % 2 === 0 && $question === 'yes' || $num % 2 !== 0 && $question === 'no') {
                line('Correct!');
                $num = rand(1, 15);
                line('Question: ' . $num);
                $question = prompt('Your answer');
} if ($num % 2 === 0 && $question === 'yes' || $num % 2 !== 0 && $question === 'no') {
                line('Correct!');
                $num = rand(1, 15);
                line('Question: ' . $num);
                $question = prompt('Your answer');
} if ($num % 2 === 0 && $question === 'yes' || $num % 2 !== 0 && $question === 'no') {
                line('Congratulations, %s!', $name);
} else {
        line("'yes' is wrong answer ;(. Correct answer was 'no'.
        Let's try again, %s!", $name);
}
