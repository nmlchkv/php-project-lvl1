<?php

  namespace Src\Cli;

  use function cli\line;
  use function cli\prompt;

function operacion()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
