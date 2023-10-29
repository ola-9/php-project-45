<?php

namespace Php\Project\Games\Gcd;

use function Php\Project\Engine\run;

use const Php\Project\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function calculateGcd(int $number1, int $number2)
{
    if ($number2 === 0) {
        return $number1;
    }
    return calculateGcd($number2, $number1 % $number2);
}

function runGcd()
{
    $data = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $num1 = rand(1, 50);
        $num2 = rand(1, 50);
        $question = "{$num1} {$num2}";
        $answer = (string)calculateGcd($num1, $num2);
        $data[] = [$question, $answer];
    }
    return run(DESCRIPTION, $data);
}
