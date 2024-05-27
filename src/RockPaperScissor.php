<?php

declare(strict_types = 1);

namespace Kata;

class RockPaperScissor
{
    public function playRound(string $option1, string $option2): string
    {
        if ($option1 === 'rock' && $option2 === 'scissors') {
            return $option1;
        }
        return 'draw';
    }

}