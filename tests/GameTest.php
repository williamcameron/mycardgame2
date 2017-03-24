<?php

namespace Tests;

use Game\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /** @test */
    public function game_has_2_players_at_start()
    {
        $game = new Game();
        $this->assertCount(2, $game->players());
    }
}
