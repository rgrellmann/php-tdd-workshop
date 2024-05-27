<?php

namespace Kata;

class RandomNumberGenerator implements NumberGeneratorInterface
{
    public function generateNumber(): int
    {
        return random_int(1, 10);
    }
}