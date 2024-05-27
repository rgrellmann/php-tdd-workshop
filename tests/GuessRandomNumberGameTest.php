<?php

declare(strict_types=1);

namespace KataTests;

use Kata\GuessRandomNumberGame;
use Kata\NumberGeneratorInterface;
use Kata\Result;
use PHPUnit\Framework\TestCase;

final class GuessRandomNumberGameTest extends TestCase
{
    public function testPlayerWinsOnFirstTry(): void
    {
        $numberGenerator = $this->createStub(NumberGeneratorInterface::class);
        $numberGenerator->method('generateNumber')->willReturn(1);

        $guessRandomNumberGame = new GuessRandomNumberGame($numberGenerator->generateNumber());

        self::assertSame(Result::WON, $guessRandomNumberGame->guessNumber(1));
    }

    public function testPlayerWinsOnSecondTry(): void
    {
        $numberGenerator = $this->createStub(NumberGeneratorInterface::class);
        $numberGenerator->method('generateNumber')->willReturn(1);

        $guessRandomNumberGame = new GuessRandomNumberGame($numberGenerator->generateNumber());

        self::assertSame(Result::NUMBER_IS_LOWER,$guessRandomNumberGame->guessNumber(5));
        self::assertSame(Result::WON, $guessRandomNumberGame->guessNumber(1));
    }

    public function testPlayerLosesIfMoreThanThreeTries(): void
    {
        $numberGenerator = $this->createStub(NumberGeneratorInterface::class);
        $numberGenerator->method('generateNumber')->willReturn(1);

        $guessRandomNumberGame = new GuessRandomNumberGame($numberGenerator->generateNumber());

        self::assertSame(Result::NUMBER_IS_LOWER,$guessRandomNumberGame->guessNumber(5));
        self::assertSame(Result::NUMBER_IS_LOWER, $guessRandomNumberGame->guessNumber(3));
        self::assertSame(Result::LOST,$guessRandomNumberGame->guessNumber(2));
        self::assertSame(Result::TOO_MANY_TRIES, $guessRandomNumberGame->guessNumber(1));
    }
}
