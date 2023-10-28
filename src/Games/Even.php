<?php

namespace Php\Project\Games\Even;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function isEven($number)
{
    return $number % 2 === 0 ? true : false;
}

function runGame()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name'); // question mark?
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $question = rand(1, 100);
        line("Question: {$question}");
        $playerAnswer = prompt("Your answer");
        $answer = isEven($question) ? 'yes' : 'no';
        if ($answer !== $playerAnswer) {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $playerAnswer, $answer);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}

