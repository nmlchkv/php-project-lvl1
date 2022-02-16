#!/usr/bin/env php

<?php
namespace src\games\calc;
$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}
    use function cli\line;
    use function cli\prompt;
    line('What is the result of the expression?');
    $arrayOperator = ['-', '+', '*'];
    $keyOperator = rand(0, 2);
    $operator = $arrayOperator[$keyOperator];
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    line('Question: ' . $num1 . ' ' . $operator . ' ' . $num2);
    $question = prompt('Your answer');
function operacion ($operator) {
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
        line("Congratulations, %s!', $name");
    } else {
        line("'{$question}' is wrong answer ;(. Correct answer was '{$answer}'.
    Let's try again, %s!', $name");
    }
}
