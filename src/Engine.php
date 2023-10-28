<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;


function run($description, $data)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?', '', ' ');
    line("Hello, %s!", $name);
    line($description);

    foreach ($data as [$question, $answer]) {
        line("Question: {$question}");
        $playerAnswer = prompt("Your answer");
        if ($answer !== $playerAnswer) {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $playerAnswer, $answer);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}
