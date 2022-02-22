<?php

  namespace src\engine;

  use function cli\line;
  use function cli\prompt;

  function logic($array, $question)
  {
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($question);
    $answer = prompt('Your answer');
    for($i = 0; $i <= 2; $i++) {
      line('Question: ' . $array[$i]);
      if($array[$i] == $answer) {
        line('Correct!')
      } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$array[$i]}'.
        Let's try again, $name!");
    }
  }
    line("Congratulations, $name!");
  }