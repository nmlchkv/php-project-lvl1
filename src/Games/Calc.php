<?php

namespace src\games\calc;

use function cli\line;
use function cli\prompt;
use function src\engine;
function operacion () 
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What is the result of the expression?');
    $arrayOperator = ['-', '+', '*'];
    $keyOperator = rand(0, 2);
    $operator = $arrayOperator[$keyOperator];
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    line('Question: ' . $num1 . ' ' . $operator . ' ' . $num2);
    $question = prompt('Your answer');
switch ($operator) {
    case '+':
        $answer =  $num1 + $num2;
        break;
    case '*':
        $answer = $num1 * $num2;
        break;
    case '-':
        $answer = $num1 - $num2;
        break;
} if ($answer == $question) {
        line("Correct!");
        $arrayOperator = ['-', '+', '*'];
        $keyOperator = rand(0, 2);
        $operator = $arrayOperator[$keyOperator];
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        line('Question: ' . $num1 . ' ' . $operator . ' ' . $num2);
        $question = prompt('Your answer');
}
switch ($operator) {
    case '+':
        $answer =  $num1 + $num2;
        break;
    case '*':
        $answer = $num1 * $num2;
        break;
    case '-':
        $answer = $num1 - $num2;
        break;
} if ($answer == $question) {
    line("Correct!");
        $arrayOperator = ['-', '+', '*'];
        $keyOperator = rand(0, 2);
        $operator = $arrayOperator[$keyOperator];
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        line('Question: ' . $num1 . ' ' . $operator . ' ' . $num2);
        $question = prompt('Your answer');
}
switch ($operator) {
    case '+':
        $answer =  $num1 + $num2;
        break;
    case '*':
        $answer = $num1 * $num2;
        break;
    case '-':
        $answer = $num1 - $num2;
        break;
} if ($answer == $question) {
        line("Congratulations, %s!", $name);
} else {
        line("'{$question}' is wrong answer ;(. Correct answer was '{$answer}'.
    Let's try again, %s!", $name);
}
}