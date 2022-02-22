<?php

  namespace src\cli;

  use function cli\line;
  use function cli\prompt;

function operacion()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
