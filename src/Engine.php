<?php

  namespace src\engine;

  use function cli\line;
  use function cli\prompt;

  function logic($number, $question)
  {
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($question . $number);
    $answer = prompt('Your answer');
    if($number == $answer) {
      line('Correct!')
    }
     ??? 
    line("Congratulations, $name!");
    } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$number}'.
        Let's try again, $name!");
    }
  }