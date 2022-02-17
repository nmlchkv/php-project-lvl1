<?php

  namespace src\engine;

  use function cli\line;
  use function cli\prompt;
  function welcome ()
  {
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
  }
     function gcd($num1, $num2) {
      $num = ((($num1 % $num2) ? gcd($num2,$num1 % $num2) : $num2));
      return $num;
  }