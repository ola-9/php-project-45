<?php

namespace Php\Project\Games\Progression;

use function Php\Project\Engine\run;

use const Php\Project\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'What number is missing in the progression?';

const PROGRESSION_LENGTH = 10;

function getProgression($step, $start, $length)
{
    $result = [];
    for ($i = 1; $i <= $length; $i += 1) {
        $result[] = $start + $i * $step;
    }
    return $result;
}

function runProgression()
{
    $data = [];
    for ($i = 0; $i < 3; $i += 1) {
        $step = rand(1, 5);
        $start = rand(1, 20);
        $progression = getProgression($step, $start, PROGRESSION_LENGTH);
        $index = rand(0, PROGRESSION_LENGTH - 1);
        $answer = (string)$progression[$index];
        $progression[$index] = '..';
        $question = implode(' ', $progression);
        $data[] = [$question, $answer];
    }
    return run(DESCRIPTION, $data);
}
