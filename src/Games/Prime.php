<?php

namespace Php\Project\Games\Prime;

use function Php\Project\Engine\run;

use const Php\Project\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $number)
{
    if ($number < 1) {
        return false;
    }

    for ($i = 2; $i < $number; $i += 1) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runPrime()
{
    $data = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $question = rand(1, 100);
        $answer = isPrime($question) ? 'yes' : 'no';
        $data[] = [$question, $answer];
    }
    return run(DESCRIPTION, $data);
}
