<?php

  namespace src\engine;

  use function cli\line;
  use function cli\prompt;

  function logic($array, $question, $arrayRand)
  {
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($question);
    for ($i = 0; $i <= count($array) - 1; $i++) {
        $str = implode(' ', $array[$i]);
        $strRand = implode(' ', $arrayRand[$i]);
        line('Question: ' . $str);
        $answer = prompt('Your answer');
        if ($strRand == $answer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$strRand}'.
            Let's try again, $name!");
            break;
        }
        line("Congratulations, $name!");
    }
}
