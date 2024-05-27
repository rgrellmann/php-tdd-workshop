<?php

declare(strict_types=1);

namespace Kata;

final class GuessRandomNumberGame
{
    private NumberGeneratorInterface $numberGenerator;

    public function __construct(NumberGeneratorInterface $numberGenerator)
    {
        $this->numberGenerator = $numberGenerator;
    }

    public function guessNumber(int $guessedNumber): bool
    {
        return true;
    }

}
