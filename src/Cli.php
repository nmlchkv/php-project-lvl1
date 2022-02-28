<?php

  namespace Src\Cli;

  use function Cli\Line;
  use function Cli\Prompt;

function calculation()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
