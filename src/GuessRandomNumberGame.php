<?php

declare(strict_types=1);

namespace Kata;

final class GuessRandomNumberGame
{
    private int $number;

    private int $numberOfTries = 0;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function guessNumber(int $guessedNumber): Result
    {
        $this->numberOfTries++;

        if ($this->numberOfTries > 3) {
            return Result::TOO_MANY_TRIES;
        }
        if ($this->number === $guessedNumber) {
            return Result::WON;
        }

        if ($this->numberOfTries === 3) {
            return Result::LOST;
        }
        return $guessedNumber > $this->number
            ? Result::NUMBER_IS_LOWER
            : Result::NUMBER_IS_GREATER;
    }

}
