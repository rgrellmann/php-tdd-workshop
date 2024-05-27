<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GuessRandomNumberGame;
use Kata\NumberGeneratorInterface;
use PHPUnit\Framework\TestCase;

final class GuessRandomNumberGameTest extends TestCase
{
    public function testPlayerWinsOnFirstTry(): void
    {
        $numberGenerator = $this->createStub(NumberGeneratorInterface::class);
        $numberGenerator->method('generateNumber')->willReturn(1);

        $guessRandomNumberGame = new GuessRandomNumberGame($numberGenerator);

        self::assertTrue($guessRandomNumberGame->guessNumber(1));
    }
}
