<?php

declare(strict_types = 1);

namespace KataTests;

use Kata\RockPaperScissor;
use PHPUnit\Framework\TestCase;


class RockPaperScissorTest extends TestCase
{
    public function test_that_game_is_a_draw(): void
    {
        $game = new RockPaperScissor();
        $result = $game->playRound('','');

        self::assertSame('draw', $result);
    }

    public function test_that_rock_beat_scissors(): void
    {
        $game = new RockPaperScissor();
        $result = $game->playRound('rock','scissors');

        self::assertSame('rock', $result);
    }


}
