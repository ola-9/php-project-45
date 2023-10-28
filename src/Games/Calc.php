<?php

namespace Php\Project\Games\Calc;

use function Php\Project\Engine\run;

use const Php\Project\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'What is the result of the expression?';

function calculate($operand1, $operand2, $operator)
{
    return match ($operator) {
        '+' => $operand1 + $operand2,
        '-' => $operand1 - $operand2,
        '*' => $operand1 * $operand2,
        default => 'unknown operator'
    };
}

function runCalc()
{
    $operators = ['+', '-', '*'];
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $index = rand(0, count($operators) - 1);
        $operation = $operators[$index];
        $question = "{$num1} {$operation} {$num2}";
        $answer = (string)calculate($num1, $num2, $operation);
        $data[] = [$question, $answer];
    }
    return run(DESCRIPTION, $data);
}
