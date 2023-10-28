<?php

namespace Php\Project\Games\Even;

use function Php\Project\Engine\run;

use const Php\Project\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($number)
{
    return $number % 2 === 0 ? true : false;
}

function runEven()
{
    $data = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        $data[] = [$question, $answer];
    }
    return run(DESCRIPTION, $data);
}
