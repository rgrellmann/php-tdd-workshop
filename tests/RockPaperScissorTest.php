<?php

declare(strict_types = 1);

namespace KataTests;

use Kata\RockPaperScissor;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;


class RockPaperScissorTest extends TestCase
{
    public static function draw()
    {
        yield "both play rock" => ['rock'];
        yield "both play paper" => ['paper'];
        yield "both play scissors" => ['scissors'];
    }

    #[Test]
    #[DataProvider("draw")]
    public function test_that_game_is_a_draw($option): void
    {
        $game = new RockPaperScissor();
        $result = $game->playRound($option,$option);

        self::assertSame('draw', $result);
    }

    public function test_that_rock_beat_scissors(): void
    {
        $game = new RockPaperScissor();
        $result = $game->playRound('rock','scissors');

        self::assertSame('rock', $result);
    }

    public function test_that_paper_beats_rock(): void
    {
        $game = new RockPaperScissor();
        $result = $game->playRound('paper','rock');

        self::assertSame('paper', $result);
    }


}
