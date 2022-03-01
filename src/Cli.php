<?php

namespace Src\Cli;

use function Cli\Line;
use function Cli\Prompt;

function calculation()
{
    Line('Welcome to the Brain Games!');
    $name = Prompt('May I have your name?');
    Line("Hello, %s!", $name);
}
